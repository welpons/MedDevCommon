<?php

namespace Welpons\MedDevCommon\Domain\Model\Device\Identifiers;

/**
 * Identifier types
 * 
 * @author felix
 */
interface IdentifierTypes 
{
    const SERIAL_NUMBER = 'sno';
    const MAC_ADDRESS = 'mac';
    const HUB_ID = 'hid';
    const UNIVERSAL_ID = 'uid';
    
    const LISTING = [self::SERIAL_NUMBER, self::MAC_ADDRESS, self::HUB_ID, self::UNIVERSAL_ID];
}
