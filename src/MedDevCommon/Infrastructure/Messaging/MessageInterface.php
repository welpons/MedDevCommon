<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Welpons\MedDevCommon\Infrastructure\Messaging;

/**
 *
 * @author felix
 */
interface MessageInterface 
{
    /**
     * @return \stdClass Description
     */
    public function getBody() : \stdClass;
    
    /**
     * @return string Unique identifier for the message
     */
    public function getMessageId() : ?string;     
    
    /**
     * @return The address where the consumer has to send back the response
     */
    public function getResponseTo() : ?string;
}
