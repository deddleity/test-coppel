<?php
/**
 * Created by PhpStorm.
 * User: diana
 * Date: 19/10/17
 * Time: 02:37 PM
 */

namespace RocketBus\Coppel\Types;


class ResponseGeneral
{
    /**
     * @var string
     * @JMS\Type("string")
     */
    private $code;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $message;

    /**
     * @var string
     * @JMS\Type("array")
     */
    private $data;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

}