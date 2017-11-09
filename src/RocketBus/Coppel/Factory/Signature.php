<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 31/10/17
 * Time: 06:43 PM
 */

namespace RocketBus;


use RocketBus\Coppel\Types\Request\LoginRequest;
use RocketBus\Coppel\Types\Response\ConfirmationResponse;


class Signature
{
    private $signature;

    private $token;

    private $associateKey;

    /**
     * @param $data LoginRequest
     */
    public function generateSignature($data, $privateKey)
    {
        $key = $privateKey . '#' . $data->getBussiness() . '#' . $data->getTransaction() . '#' . $data->getAmount();

        $md5key = md5($key);

        $this->signature = $md5key;

        return $md5key;
    }

    /**
     * @param $data ConfirmationResponse
     */
    public function generateToken($confirmationData)
    {
        $key = $data->getData()->getAuthCode() . '#' . $this->getAssociateKey();

        $md5Key = md5($key);

        return $md5Key;
    }

    /**
     * @param mixed $associateKey
     */
    public function setAssociateKey($associateKey)
    {
        $this->associateKey = $associateKey;
    }

    /**
     * @return mixed
     */
    public function getAssociateKey()
    {
        return $this->associateKey;
    }


    
    
}