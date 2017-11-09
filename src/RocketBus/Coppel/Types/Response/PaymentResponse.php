<?php

namespace RocketBus\Coppel\Types\Response;
use RocketBus\Coppel\Types\ResponseGeneral;


/**
 * Created by PhpStorm.
 * User: diana
 * Date: 19/10/17
 * Time: 02:29 PM
 */
class PaymentResponse extends ResponseGeneral
{
    /**
     * @var PaymentDataResponse
     * @JMS\Type("PaymentDataResponse")
     */
    private $data;

    /**
     * @return PaymentDataResponse
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param PaymentDataResponse $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
    
}