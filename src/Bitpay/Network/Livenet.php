<?php

namespace Bitpay\Network;

class Livenet implements NetworkInterface
{

    public function getName()
    {
        return 'livenet';
    }

    public function getAddressVersion()
    {
        return '0x00';
    }
}
