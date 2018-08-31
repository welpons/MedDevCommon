<?php

namespace Welpons\MedDevCommon\Infrastructure\Messaging;

use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Description of Message
 *
 * @author felix
 */
class Header 
{
    /**
     *
     * @var string
     */
    protected $messageId;
    
    /**
     *
     * @var string 
     */
    protected $responseTo;

    public function __construct(string $messageId = null, string $responseTo = null) 
    {            
        $this->messageId = $messageId;
        $this->responseTo = $responseTo;
    }
    
    public function getMessageId() : ?string
    {
        return $this->messageId;
    }

    
    function getResponseTo() : ?string
    {
        return $this->responseTo;
    }

}
