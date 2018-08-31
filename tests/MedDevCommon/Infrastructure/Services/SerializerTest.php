<?php

namespace Welpons\Tests\MedDevCommon\Infrastructure\Services;

use Welpons\MedDevCommon\Infrastructure\Services\Serializer;
use Welpons\MedDevCommon\Infrastructure\Messaging\Message;
use JMS\Serializer\SerializerInterface;
use PHPUnit\Framework\TestCase;

/**
 * Description of SerializerTest
 *
 * @author felix
 */
class SerializerTest extends TestCase
{
    public function testSerializerInstantiation()
    {
        $serializer = new Serializer();
        $this->assertTrue($serializer instanceof SerializerInterface);
    }
    
    public function testSerializeAnObject()
    {
        $serializer = new Serializer();
        $message = new Message();
        $jsonBodyContent = '{"menu": { "id": "file", "value": "File", "popup": { "menuitem": [
                        {"value": "New", "onclick": "CreateNewDoc()"},
                        {"value": "Open", "onclick": "OpenDoc()"},
                        {"value": "Close", "onclick": "CloseDoc()"}
                        ]
                    }
                }}';
        $content = json_decode($jsonBodyContent);
        $message->setBody($content);
 
        
        $xmlMessage = $serializer->serialize($message, 'xml');
        $xml = new \SimpleXMLElement($xmlMessage);
        $this->assertTrue(is_object($xml));
    }     
    
    
}
