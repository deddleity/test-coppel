<?php

namespace RocketBus\Coppel\Service;


class CoppelServiceConfig
{
    /**
     * @var string
     */
    private $business;

    /**
     * @var string
     */
    private $privateKey;

    /**
     * @var string
     */
    private $publicKey;

    /**
     * @var string
     */
    private $cacheDir;

    /**
     * @var string
     */
    private $connectUrl;

    /**
     * @var string
     */
    private $successUrl;

    /**
     * @var string
     */
    private $errorUrl;
    
    
    public function __construct($business, $publicKey, $privateKey, $url, $cacheDir = null)
    {
        $this->setBusiness($business);
        $this->setPublicKey($publicKey);
        $this->setPrivateKey($privateKey);
        $this->setUrl($url);
        $this->setCacheDir($cacheDir);
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
     * @return CoppelServiceConfig
     */
    public function setBusiness($business)
    {
        $this->business = $business;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrivateKey()
    {
        return $this->privateKey;
    }

    /**
     * @param string $privateKey
     * @return CoppelServiceConfig
     */
    public function setPrivateKey($privateKey)
    {
        $this->privateKey = $privateKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * @param string $publicKey
     * @return CoppelServiceConfig
     */
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getCacheDir()
    {
        return $this->cacheDir;
    }

    /**
     * @param string $cacheDir
     * @return CoppelServiceConfig
     */
    public function setCacheDir($cacheDir)
    {
        $this->cacheDir = $cacheDir;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return CoppelServiceConfig
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
    
    
    
    

}