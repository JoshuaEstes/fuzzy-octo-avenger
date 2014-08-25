<?php

namespace Bitpay\PrecisionMath;

class GmpStrategyTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        if (!extension_loaded('gmp')) {
            $this->markTestSkipped('GMP extension required');
        }
    }

    public function testMath()
    {
        $context = MathContext::getInstance(new GmpStrategy());
        $result = $context::add(1, 1);

        // GMP Resource
        var_dump($result);

        // "2"
        var_dump($context::toString($result));

        // 2
        var_dump($context::toInteger($result));
    }
}
