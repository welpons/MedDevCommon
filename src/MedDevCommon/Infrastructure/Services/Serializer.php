<?php

namespace Welpons\MedDevCommon\Infrastructure\Services;

use JMS\Serializer\SerializerInterface;
use JMS\Serializer\DeserializationContext;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use Doctrine\Common\Annotations\AnnotationRegistry;

/**
 * Serializer service
 *
 * @author felix
 */
class Serializer implements SerializerInterface 
{
    private $serializer;

    public function __construct() 
    {
        $this->serializer = SerializerBuilder::create()
                ->setPropertyNamingStrategy(
                        new SerializedNameAnnotationStrategy(
                        new IdenticalPropertyNamingStrategy()
                        )
                )
                ->build();
        
        AnnotationRegistry::registerLoader('class_exists');
    }

    public function deserialize($data, $type, $format, DeserializationContext $context = null) 
    {
        return $this->serializer->deserialize($data, $type, $format, $context);
    }

    public function serialize($data, $format, SerializationContext $context = null): string 
    {
        return $this->serializer->serialize($data, $format, $context);
    }

}
