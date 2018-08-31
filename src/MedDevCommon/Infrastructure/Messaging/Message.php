<?php

namespace Welpons\MedDevCommon\Infrastructure\Messaging;

use Welpons\MedDevCommon\Infrastructure\Messaging\Message;
use JMS\Serializer\Annotation\XmlRoot;

/** @XmlRoot("message") */
class Message implements MessageInterface
{
    /**
     *
     * @var Header 
     */
    private $header;
    
    /**
     * The structure of the body is defined by the provider
     * 
     * @var \stdClass 
     */
    private $body;

    public function __construct(string $messageId = null, string $responseTo = null) 
    {
        if (empty($messageId)) {
            $messageId = uniqid();
        }
        
        $this-> header = new Header($messageId, $responseTo);        
    }
    
    public function getBody() : \stdClass
    {
        return $this->body;
    }

    public function setBody(\stdClass $bodyContent)
    {
        $this->body = $bodyContent;
    }   
    
    public function getMessageId() : ?string
    {
        return $this->header->getMessageId();
    }     
    
    public function getResponseTo() : ?string
    {
        return $this->header->getResponseTo();
    }    
}
