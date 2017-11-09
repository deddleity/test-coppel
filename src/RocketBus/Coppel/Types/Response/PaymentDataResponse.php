<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 19/10/17
 * Time: 02:52 PM
 */

namespace RocketBus\Coppel\Types\Response;


class PaymentDataResponse
{
    /**
     * @var string
     * @JMS\Type("string")
     */
    private $request;

    /**
     * @var AssociateDataResponse
     * @JMS\Type("AssociateDataResponse")
     */
    private $associate;

    /**
     * @return string
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param string $request
     */
    public function setRequest($request)
    {
        $this->request = $request;
    }

    /**
     * @return AssociateDataResponse
     */
    public function getAssociate()
    {
        return $this->associate;
    }

    /**
     * @param AssociateDataResponse $associate
     */
    public function setAssociate($associate)
    {
        $this->associate = $associate;
    }


    
}