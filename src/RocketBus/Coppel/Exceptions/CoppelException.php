<?php

namespace RocketBus\Coppel\Exceptions;

class CoppelException extends \Exception
{
    public function __construct($message, $code, Exception $previous)
    {
        parent::__construct($message, $code, $previous);
    }

}