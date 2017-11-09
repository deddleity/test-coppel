<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 31/10/17
 * Time: 01:40 PM
 */

namespace RocketBus\Coppel\Types\Request;


class PaymentDetailsRequest
{
    /**
     * @var string
     */
    protected $solicitud;

    /**
     * @var string
     */
    protected $token;

    /**
     * @return string
     */
    public function getSolicitud()
    {
        return $this->solicitud;
    }

    /**
     * @param string $solicitud
     */
    public function setSolicitud($solicitud)
    {
        $this->solicitud = $solicitud;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    

}