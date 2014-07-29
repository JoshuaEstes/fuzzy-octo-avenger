<?php

namespace Bitpay;

use Bitpay\Network\NetworkAwareInterface;
use Bitpay\Network\NetworkInterface;

/**
 */
class Address implements AddressInterface, NetworkAwareInterface
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

    public function generateAddress()
    {
    }

    public function isValid()
    {
    }

    public function hash160ToAddress($hash, $addressVersion = self::LIVENET)
    {
    }

    public function addressToHash160($address)
    {
    }

    /**
     * @return NetworkInterface
     */
    public function getNetwork()
    {
        return $this->network;
    }
}
