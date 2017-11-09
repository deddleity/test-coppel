<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 31/10/17
 * Time: 03:18 PM
 */

namespace RocketBus\Coppel\Types\Response;


class ConfirmationDataResponse
{
    /**
     * @var string
     */
    private $authCode;

    /**
     * @var string
     */
    private $auth;

    /**
     * @var string
     */
    private $urlRedirection;

    /**
     * @var string
     */
    private $business;

    /**
     * @var string
     */
    private $signature;

    /**
     * @var string
     */
    private $amaunt;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $transaction;

    /**
     * @return string
     */
    public function getAuthCode()
    {
        return $this->authCode;
    }

    /**
     * @param string $authCode
     */
    public function setAuthCode($authCode)
    {
        $this->authCode = $authCode;
    }

    /**
     * @return string
     */
    public function getAuth()
    {
        return $this->auth;
    }

    /**
     * @param string $auth
     */
    public function setAuth($auth)
    {
        $this->auth = $auth;
    }

    /**
     * @return string
     */
    public function getUrlRedirection()
    {
        return $this->urlRedirection;
    }

    /**
     * @param string $urlRedirection
     */
    public function setUrlRedirection($urlRedirection)
    {
        $this->urlRedirection = $urlRedirection;
    }

    /**
     * @return string
     */
    public function getBusiness()
    {
        return $this->business;
    }

    /**
     * @param string $business
     */
    public function setBusiness($business)
    {
        $this->business = $business;
    }

    /**
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * @param string $signature
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
    }

    /**
     * @return string
     */
    public function getAmaunt()
    {
        return $this->amaunt;
    }

    /**
     * @param string $amaunt
     */
    public function setAmaunt($amaunt)
    {
        $this->amaunt = $amaunt;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * @param string $transaction
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;
    }



}