<?php

namespace Welpons\MedDevCommon\Infrastructure\Messaging;

use Welpons\MedDevCommon\Infrastructure\Messaging\Message;
use JMS\Serializer\Annotation\XmlRoot;

/** @XmlRoot("message") */
class Message
{
    /**
     *
     * @var Header 
     */
    private $header;
    
    /**
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
    
    public function setMessageId(string $id)
    {
        $this->header->setMessageId($id);
    }        
    
    public function getMessageId()
    {
        return $this->header->getMessageId();
    }     
    
    function getResponseTo() : string
    {
        return $this->header->getResponseTo();
    }    
}
