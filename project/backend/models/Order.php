<?php
/**
 * Order data model
 *
 * @author Andrey Korchak <ak@budist.ru>
 */

Yii::import('ext.ECCValidator');
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
            ['customer_name, cardholder_name', 'match', 'pattern' => '/^[a-zA-Z\s]+$/',
                'allowEmpty' => false, 'message' => 'This field can only contain word characters'],

            // order data validation
            ['currency', 'in', 'range' => self::$currencies, 'allowEmpty' => false],
            ['amount', 'numerical', 'allowEmpty' => false, 'integerOnly' => true],


            // payment data validaton
            ['card_ccv', 'numerical', 'allowEmpty' => false, 'integerOnly' => true],
            ['card_ccv', 'length', 'is' => 3],
            ['card_number', 'cardAndCurrecnyValidator'],
            ['card_expiration_year', 'cardExpirationValidator']
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

}
