<?php

namespace Bitpay;

/**
 * Bitcoin Address
 */
interface AddressInterface
{
    const LIVENET = '0x00';
    const TESTNET = '0x6F';

    public function generateAddress();
    public function isValid();
    public function hash160ToAddress($hash, $addressVersion = self::LIVENET);
    public function addresToHash160($address);
}
