<?php

namespace RocketBus\Coppel\Types\Request;

use JMS\Serializer\Annotation as JMS;

/**
 * Created by PhpStorm.
 * User: diana
 * Date: 19/10/17
 * Time: 01:24 PM
 * Solicitud de Compra
 */
class PaymentRequest
{
    /**
     * @var string
     * @JMS\Type("string")
     */
    private $business;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $transaction;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $signature;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $amount;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $currency;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $description;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $UrlRedirect;

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
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
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
    public function getUrlRedirect()
    {
        return $this->UrlRedirect;
    }

    /**
     * @param string $UrlRedirect
     */
    public function setUrlRedirect($UrlRedirect)
    {
        $this->UrlRedirct = $UrlRedirect;
    }



}