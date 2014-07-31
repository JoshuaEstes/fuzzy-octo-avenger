<?php

namespace Bitpay;

use Bitpay\Config;

class ConfigTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        $this->config = new Config();
    }

    public function testGet()
    {
        // without default
        $this->assertNull($this->config->get('pubkey'));

        // with default
        $this->assertSame('default', $this->config->get('pubkey', 'default'));
    }

    public function testSet()
    {
        $this->config->set('pubkey', '/path/to/public.key');

        $this->assertSame('/path/to/public.key', $this->config->get('pubkey'));
    }
}
