<?php

namespace Bitpay\Network;

/**
 */
abstract class NetworkAware implements NetworkAwareInterface
{

    /**
     * @var NetworkInterface
     */
    protected $network;

    /**
     * @inheritdoc
     */
    public function setNetwork(NetworkInterface $network = null)
    {
        $this->network = $network;
    }
}
