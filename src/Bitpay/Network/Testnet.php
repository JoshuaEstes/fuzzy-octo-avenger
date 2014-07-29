<?php

namespace Bitpay\Network;

class Testnet implements NetworkInterface
{

    public function getName()
    {
        return 'testnet';
    }

    public function getAddressVersion()
    {
        return '0x6f';
    }
}
