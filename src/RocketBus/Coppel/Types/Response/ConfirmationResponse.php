<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 31/10/17
 * Time: 03:17 PM
 */

namespace RocketBus\Coppel\Types\Response;


use RocketBus\Coppel\Types\ResponseGeneral;
use RocketBus\Coppel\Types\Response\ConfirmationDataResponse;

class ConfirmationResponse extends ResponseGeneral
{
    /**
     * @var ConfirmationDataResponse
     * @JMS\Type("ConfirmationDataResponse")
     */
    private $data;

    /**
     * @return ConfirmationDataResponse
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param ConfirmationDataResponse $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

}