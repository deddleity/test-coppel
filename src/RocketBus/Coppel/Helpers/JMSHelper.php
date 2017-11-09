<?php
namespace RocketBus\Coppel\Helpers;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializerBuilder;

class JMSHelper
{
    /**
     * @param $json
     * @param string $classname
     * @return array|object
     */
    public static function parseJSON($json, $classname = 'stdClass')
    {
        self::validateJSON($json);

        if ($classname === 'stdClass') {
            return json_decode($json);
        }

        $serializerBuilder = SerializerBuilder::create();
        $serializerBuilder->setPropertyNamingStrategy(
            new SerializedNameAnnotationStrategy(new IdenticalPropertyNamingStrategy())
        );

        if (self::$cacheDir !== null) {
            $serializerBuilder->setCacheDir(self::$cacheDir."/jms_serializer");
        }

        $serializer = $serializerBuilder->build();
        $instance = $serializer->deserialize($json, $classname, 'json');
        return $instance;
    }

    public static function parseObject($object, $classname)
    {
        $serializerBuilder = SerializerBuilder::create();
        $serializerBuilder->setPropertyNamingStrategy(
            new SerializedNameAnnotationStrategy(new IdenticalPropertyNamingStrategy())
        );

        if (self::$cacheDir !== null) {
            $serializerBuilder->setCacheDir(self::$cacheDir."/jms_serializer");
        }

        $serializer = $serializerBuilder->build();
        $instance = $serializer->serialize($object, $classname, 'json');

        return $json;
        
    }
    
    
}