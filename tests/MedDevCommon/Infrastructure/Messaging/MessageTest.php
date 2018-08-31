<?php

namespace Welpons\Tests\MedDevCommon\Infrastructure\Messaging;

use Welpons\MedDevCommon\Infrastructure\Messaging\Message;
use Welpons\MedDevCommon\Infrastructure\Messaging\MessageInterface;
use PHPUnit\Framework\TestCase;

/**
 * Description of MessageTest
 *
 * @author felix
 */
class MessageTest extends TestCase 
{

    public function testInstanceMessage() 
    {
        $message = new Message();
        $this->assertTrue($message instanceof MessageInterface);
    }

    public function testMessageEmptyConstructor() 
    {
        $message = new Message();
        $this->assertTrue(is_string($message->getMessageId()));
        $this->assertNull($message->getResponseTo());
    }

    public function testMessageWithConstructor() 
    {
        $messageId = uniqid();
        $message = new Message($messageId);
        $this->assertEquals($messageId, $message->getMessageId());
        $this->assertNull($message->getResponseTo());
    }

}
