<?php
namespace RocketBus\Coppel\Service;

use Psr\Log\LoggerInterface;
use RocketBus\Coppel\Helpers\JMSHelper;
use RocketBus\Coppel\Types\Request\LoginRequest;

class CoppelServiceClient
{
    protected $logger;

    protected $coppelConfig;
    
    public function __construct(CoppelServiceConfig $coppelServiceConfig, LoggerInterface $logger = null)
    {
        $this->coppelConfig = $coppelServiceConfig;
        $this->logger = $logger;
    }

    /**
     * @param LoggerInterface|null $logger
     * @return $this
     */
    public function setLogger(LoggerInterface $logger = null)
    {
        if ($logger === null) {
            $this->logger = new NullLogger();
        } else {
            $this->logger = $logger;
        }
        return $this;
    }

    public function loginCoppel($data)
    {
        $data = JMSHelper::parseObject($data,new LoginRequest());
        
        
        $this->logger->info('[coppel][loginState]'. $logger);
        $request = [
            'uri' =>  'https://login.coppelpay.com/solo-login',
            'data' => $data
        ];
        
        
    }

    public function paymentRequest($request)
    {
        
    }
    
    public function paymentDetail($request)
    {
        
    }
    
    public function paymentConfirmation($request)
    {
        
    }
    
    public function autentication($request)
    {
        
    }
    


}