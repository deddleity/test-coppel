<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 31/10/17
 * Time: 03:14 PM
 */

namespace RocketBus\Coppel\Types\Response;

use RocketBus\Coppel\Types\ResponseGeneral;

class PaymentDetailResponse extends ResponseGeneral
{
    /**
     * @var PaymentDetailDataResponse
     * @JMS\Type("PaymentDataResponse")
     */
    private $data;

    /**
     * @return PaymentDetailDataResponse
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param PaymentDetailDataResponse $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
}