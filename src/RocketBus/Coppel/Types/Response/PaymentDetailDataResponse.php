<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 31/10/17
 * Time: 03:04 PM
 */

namespace RocketBus\Coppel\Types\Response;


class PaymentDetailDataResponse extends PaymentDataResponse
{
    /**
     * @var LoginResponse
     */
    private $associate;

    /**
     * @return LoginResponse
     */
    public function getAssociate()
    {
        return $this->associate;
    }

    /**
     * @param LoginResponse $associate
     */
    public function setAssociate($associate)
    {
        $this->associate = $associate;
    }
    
    

}