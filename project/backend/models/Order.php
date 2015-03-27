<?php
/**
 * Order data model
 *
 * @author Andrey Korchak <ak@budist.ru>
 */

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

use PayPal\Api\Amount;
use PayPal\Api\AmountDetails;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\CreditCard;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\FundingInstrument;
use PayPal\Api\Transaction;
use PayPal\Api\PaymentExecution;


Yii::import('ext.ECCValidator');

Yii::import('application.vendors.braintree.braintree_php.lib.Braintree');

class Order extends CActiveRecord
{

    /**
     * Currency codes
     *
     */
    const CURR_USD = 'USD';
    const CURR_EUR = 'EUR';
    const CURR_AUD = 'AUD';
    const CURR_THB = 'THB';
    const CURR_HKD = 'HKD';
    const CURR_SGD = 'SGD';


    /**
     * Allowed currecnies
     * @var array
     */
    public static $currencies = [
        self::CURR_USD,
        self::CURR_EUR,
        self::CURR_AUD,
        self::CURR_THB,
        self::CURR_HKD,
        self::CURR_SGD,
    ];


    /**
     * Allowed gateways
     *
     */
    const GATEWAY_PAYPAL = 'paypal';
    const GATEWAY_BRAINTREE = 'braintree';

    public static $allowedGateways = [
        0 => self::GATEWAY_PAYPAL,
        1 => self::GATEWAY_BRAINTREE,
    ];


    /**
     * Status codes for internal usage
     *
     */
    const CODE_DONE = 1;
    const CODE_ERROR = 2;


    /**
     * Model properties
     *
     */
    public  $amount,
            $currency,
            $customer_name,
            $cardholder_name,
            $card_number,
            $card_ccv,
            $card_expiration_month,
            $card_expiration_year,
            $card_expiration;

    /**
     * Extra params for DB
     * @note I didn't make this properies private cuz ORM needs them to be public
     */
    public $gateway_answer,
           $used_gateway;


    /**
     * @param string $className
     * @return CActiveRecord
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * DB table name
     * @return string
     */
    public function tableName()
    {
        return 'orders';
    }

    /**
     * Validation rules
     * @return array
     */
    public function rules()
    {
        return [
            // Common validation rules
            ['amount, currency, customer_name, cardholder_name, card_number, card_ccv,
                card_expiration_month, card_expiration_year', 'required'],
            ['customer_name, cardholder_name', 'length', 'min' => 10, 'max' => 100],
            ['customer_name, cardholder_name', 'match', 'pattern' => "/^[a-zA-Z\s]+$/",
                'allowEmpty' => false, 'message' => 'This field can only contain word characters'],

            // order data validation
            ['currency', 'in', 'range' => self::$currencies, 'allowEmpty' => false],
            ['amount', 'numerical', 'allowEmpty' => false, 'integerOnly' => true],


            // payment data validaton
            ['card_ccv', 'numerical', 'allowEmpty' => false, 'integerOnly' => true],
            ['card_ccv', 'length', 'is' => 3],
            ['card_number', 'cardAndCurrecnyValidator'],
            ['card_expiration_year', 'cardExpirationValidator'],
            ['cardholder_name', 'match', 'pattern' => "/^([a-zA-Z]+)\s+([a-zA-Z]+)$/", 'allowEmpty' => false]
        ];
    }


    /**
     * Validate CC number and currency
     *
     * @param string $attribute — model attribute name
     * @param mixed  $params    - array of params for this validaton rule or null
     *
     * @return bool
     *
     */
    public function cardAndCurrecnyValidator($attribute, $params = null)
    {
        $cc = new ECCValidator();

        // general cc validation
        $cc->format = [ECCValidator::ALL];
        if (!$cc->validateNumber($this->card_number)) {
            $this->addError('card_number', 'Card nuber is invalid');
            return false;
        }

        // AMEX
        $cc->format = [ECCValidator::AMERICAN_EXPRESS];
        if ($cc->validateNumber($this->card_number)) {

            if ($this->currency !== self::CURR_USD) {
                $this->addError('currency', 'With AMEX card you can pay only in USD');
                return false;
            }
        }

        return true;
    }


    /**
     * Validate CC expiration
     *
     * @param string $attribute — model attribute name
     * @param mixed  $params    - array of params for this validaton rule or null
     *
     * @return bool
     *
     */
    public function cardExpirationValidator($attribute, $params = null)
    {
        $currentMonth = date('n');
        $currentYear  = date('Y');

        if ($this->card_expiration_year == $currentYear && $currentMonth > $this->card_expiration_month) {
            $this->addError('card_expiration', 'Your card already expired');
            return false;
        }

        return true;
    }


    /**
     * Process payments
     *
     * @note will be better to use Factory here, but I puted all
     * code in one file to save the time
     *
     * @return int status code
     */
    public function process()
    {

        if (in_array($this->currency, [self::CURR_USD, self::CURR_AUD, self::CURR_EUR])) {
            return $this->processPaypal();
        } else {
            return $this->processBraintree();
        }

        return self::CODE_ERROR;

    }


    /**
     * Process order with Braintree
     *
     * @return int status code
     */
    private function processBraintree()
    {
        Braintree_Configuration::environment(Yii::app()->params['braintreeEnv']);
        Braintree_Configuration::merchantId(Yii::app()->params['braintreeMerchantId']);
        Braintree_Configuration::publicKey(Yii::app()->params['braintreePublicKey']);
        Braintree_Configuration::privateKey(Yii::app()->params['braintreePrivateKey']);

        $result = Braintree_Transaction::sale([
            'amount'            => $this->amount,
            'merchantAccountId' => Yii::app()->params['brainTreeMechantAccounts'][$this->currency],
            'creditCard'    => [
                'number'            => $this->card_number,
                'expirationMonth'   => $this->card_expiration_month,
                'expirationYear'    => $this->card_expiration_year
            ]
        ]);


        if ($result->success) {

            // store order data
            $this->used_gateway   = self::GATEWAY_BRAINTREE;
            $this->gateway_answer = json_encode(['id' => $result->transaction->id]);

            $this->save(false);

            return self::CODE_DONE;
        }


        return self::CODE_ERROR;
    }


    /**
     * Process order with Paypal
     *
     * @return int result code
     */
    private function processPaypal()
    {
        $apiContext = new ApiContext(
            new OAuthTokenCredential(
                Yii::app()->params['paypalClientId'],
                Yii::app()->params['paypalSecret']
            )
        );

        $ccType = $this->detectCCType();
        $ccType = $this->mapCCTypeToPaypalTypes($ccType);

        $name = explode(' ', $this->cardholder_name);

        // Prevent SSL errors
        PPHttpConfig::$DEFAULT_CURL_OPTS[CURLOPT_SSLVERSION] = 4;

        // Setup and process payment
        $card = new CreditCard();
        $card->setType($ccType);
        $card->setNumber($this->card_number);
        $card->setExpire_month($this->card_expiration_month);
        $card->setExpire_year($this->card_expiration_year);
        $card->setCvv2($this->card_ccv);
        $card->setFirst_name(trim($name[0]));
        $card->setLast_name(trim($name[1]));


        $fi = new FundingInstrument();
        $fi->setCredit_card($card);

        $payer = new Payer();
        $payer->setPayment_method('credit_card');
        $payer->setFunding_instruments(array($fi));

        $amountDetails = new AmountDetails();
        $amountDetails->setSubtotal($this->amount);
        $amountDetails->setTax('0');
        $amountDetails->setShipping('0');

        $amount = new Amount();
        $amount->setCurrency($this->currency);
        $amount->setTotal($this->amount);
        $amount->setDetails($amountDetails);

        $transaction = new Transaction();
        $transaction->setAmount($amount);
        $transaction->setDescription('This is the payment transaction description.');

        $payment = new Payment();
        $payment->setIntent('sale');
        $payment->setPayer($payer);
        $payment->setTransactions(array($transaction));


        try {
            $payment->create($apiContext);

            // store order data
            $this->used_gateway   = self::GATEWAY_PAYPAL;
            $this->gateway_answer = json_encode(['id' => $payment->id]);

            $this->save(false);

        } catch (Exception $ex) {
            return self::CODE_ERROR;
        }

        return self::CODE_DONE;
    }


    /**
     * Detect CC type
     *
     * @return mixed
     */
    private function detectCCType()
    {
        $cc = new ECCValidator();
        foreach (ECCValidator::$patterns as $type => $pattern)  {
            $cc->format  = [$type];
            if ($cc->validateNumber($this->card_number)) {
                return $type;
            }
        }

        return false;
    }


    /**
     * Map internal CC types to PayPal types
     *
     * @param string $type
     *
     * @return mixed
     */
    private function mapCCTypeToPaypalTypes($type)
    {
        $map = [
            ECCValidator::MASTERCARD        => 'mastercard',
            ECCValidator::VISA              => 'visa',
            ECCValidator::AMERICAN_EXPRESS  => 'amex',
            ECCValidator::DISCOVER          => 'discover'
        ];


        if (!array_key_exists($type, $map)) {
            throw new Exception("Paypal doesn't suppost this type of CC: {$type}", 1);
        }

        return $map[$type];
    }

}
