<?php

namespace Bitpay\Network;

interface NetworkInterface
{

    /**
     * Name of network, currently on livenet and testnet
     *
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getAddressVersion();
}
