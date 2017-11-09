<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 31/10/17
 * Time: 01:08 PM
 */

namespace RocketBus\Coppel\Types\Request;

use JMS\Serializer\Annotation as Serializer;

class LoginRequest
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cpl_business")
     */
    protected $bussiness;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cpl_transaction")
     */
    protected $transaction;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cpl_signature")
     */
    protected $signature;

    /**
     * @var integer
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cpl_amount")
     */
    protected $amount;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cpl_currency")
     */
    protected $currency;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cpl_description")
     */
    protected $description;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cpl_url_response")
     */
    protected $urlResponse;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cpl_url_redirect")
     */
    protected $urlRedirect;

    /**
     * @return string
     */
    public function getBussiness()
    {
        return $this->bussiness;
    }

    /**
     * @param string $bussiness
     */
    public function setBussiness($bussiness)
    {
        $this->bussiness = $bussiness;
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
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
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
    public function getUrlResponse()
    {
        return $this->urlResponse;
    }

    /**
     * @param string $urlResponse
     */
    public function setUrlResponse($urlResponse)
    {
        $this->urlResponse = $urlResponse;
    }

    /**
     * @return string
     */
    public function getUrlRedirect()
    {
        return $this->urlRedirect;
    }

    /**
     * @param string $urlRedirect
     */
    public function setUrlRedirect($urlRedirect)
    {
        $this->urlRedirect = $urlRedirect;
    }


}