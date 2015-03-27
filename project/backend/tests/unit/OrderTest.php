<?php
/**
 * A couple of unit tests just to show that I can do that
 *
 *
 */

Yii::import('application.models.Order');

class OrderTest extends CDbTestCase
{

    /**
     * Some valid input
     * @var array
     */
    public $input = [
            'amount'                    => 1000,
            'currency'                  => 'USD',
            'customer_name'             => 'Customer name',
            'cardholder_name'           => 'Cardholder name',
            'card_number'               => '378282246310005',
            'card_ccv'                  => '123',
            'card_expiration_month'     => '6',
            'card_expiration_year'      => '2015',
        ];

    /**
     * Test validations
     *
     *
     */
    public function testValidation()
    {
        $obj    = new Order();
        $obj->validate();

        // test empty input
        $result = $obj->errors;
        $this->assertNotEmpty($result);
        $this->assertEquals(count($result), 8);

        $data = $this->input;

        // test valid input
        $obj->attributes = $data;
        $obj->validate();
        $result = $obj->errors;
        $this->assertEmpty($result);


        // Test validation error: AMEX and not USD currency
        $data['currency'] = 'THB';
        $obj->attributes = $data;
        $obj->validate();
        $result = $obj->errors;
        $this->assertNotEmpty($result);
        $this->assertEquals(count($result), 1);

        $this->assertEquals(true,true);
    }


    /**
     * Test Braintree payment
     *
     */
    public function testBraintree()
    {
        $obj    = new Order();
        $data   = $this->input;

        // mastercard test cc number
        $data['card_number'] = '5555555555554444';
        $data['currency']    = 'THB';

        $obj->attributes = $data;
        $result = $obj->process();
        $this->assertEquals($result, 1);
        $this->assertEquals($obj->used_gateway, 'braintree');
    }

}