<?php

namespace Bitpay\Network;

use Bitpay\Network\NetworkInterface;

/**
 */
interface NetworkAwareInterface
{

    /**
     * Set the network the object will work with
     *
     * @param NetworkInterface $network
     */
    public function setNetwork(NetworkInterface $network = null);
}
