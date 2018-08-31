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
    public function getBody() : \stdClass;
    
    public function getMessageId() : ?string;     
    
    public function getResponseTo() : ?string;
}
