<?php

namespace Bitpay;

use Bitpay\Address;

class AddressTest extends \PHPUnit_Framework_TestCase
{

    public function testSetNetwork()
    {
        $address = new Address();
        $address->setNetwork($this->getMockNetwork());
    }

    /**
     * @depends testSetNetwork
     */
    public function testGetNetwork()
    {
        $address = new Address();
        $this->assertNull($address->getNetwork());
        $address->setNetwork($this->getMockNetwork());
        $this->assertInstanceOf('Bitpay\Network\NetworkInterface', $address->getNetwork());
    }

    private function getMockNetwork()
    {
        return $this->getMock('Bitpay\Network\NetworkInterface');
    }
}
