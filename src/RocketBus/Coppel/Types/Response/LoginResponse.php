<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 31/10/17
 * Time: 01:19 PM
 */

namespace RocketBus\Coppel\Types\Response;


class LoginResponse
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("solicitud")
     */
    protected $requestNumber;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("token")
     */
    protected $token;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("num_client")
     */
    protected $clientNumber;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("nombre")
     */
    protected $name;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("telefono")
     */
    protected $phone;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("email")
     */
    protected $email;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("limite")
     */
    protected $limit;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("producto")
     */
    protected $product;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("totalcontado")
     */
    protected $totalCash;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("totalcredito")
     */
    protected $totalCredit;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("intereses")
     */
    protected $interest;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("abono")
     */
    protected $partPayment;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("plazo")
     */
    protected $term;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("fechadepago")
     */
    protected $limitPaymentDate;

    /**
     * @return string
     */
    public function getRequestNumber()
    {
        return $this->requestNumber;
    }

    /**
     * @param string $requestNumber
     */
    public function setRequestNumber($requestNumber)
    {
        $this->requestNumber = $requestNumber;
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

    /**
     * @return string
     */
    public function getClientNumber()
    {
        return $this->clientNumber;
    }

    /**
     * @param string $clientNumber
     */
    public function setClientNumber($clientNumber)
    {
        $this->clientNumber = $clientNumber;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param string $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    /**
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param string $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @return string
     */
    public function getTotalCash()
    {
        return $this->totalCash;
    }

    /**
     * @param string $totalCash
     */
    public function setTotalCash($totalCash)
    {
        $this->totalCash = $totalCash;
    }

    /**
     * @return string
     */
    public function getTotalCredit()
    {
        return $this->totalCredit;
    }

    /**
     * @param string $totalCredit
     */
    public function setTotalCredit($totalCredit)
    {
        $this->totalCredit = $totalCredit;
    }

    /**
     * @return string
     */
    public function getInterest()
    {
        return $this->interest;
    }

    /**
     * @param string $interest
     */
    public function setInterest($interest)
    {
        $this->interest = $interest;
    }

    /**
     * @return string
     */
    public function getPartPayment()
    {
        return $this->partPayment;
    }

    /**
     * @param string $partPayment
     */
    public function setPartPayment($partPayment)
    {
        $this->partPayment = $partPayment;
    }

    /**
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * @param string $term
     */
    public function setTerm($term)
    {
        $this->term = $term;
    }

    /**
     * @return string
     */
    public function getLimitPaymentDate()
    {
        return $this->limitPaymentDate;
    }

    /**
     * @param string $limitPaymentDate
     */
    public function setLimitPaymentDate($limitPaymentDate)
    {
        $this->limitPaymentDate = $limitPaymentDate;
    }




}