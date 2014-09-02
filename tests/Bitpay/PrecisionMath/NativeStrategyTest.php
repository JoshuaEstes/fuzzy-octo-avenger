<?php

namespace Bitpay\PrecisionMath;

class NativeStrategyTest extends \PHPUnit_Framework_TestCase
{

    public function testCompare()
    {
        // a > b = 1
        // a = b = 0
        // a < b = -1
        // a, b, c
        $data = array(
            array(2, 1, 1),
            array(1, 1, 0),
            array(1, 2, -1),
        );

        foreach ($data as $datum) {
            $this->assertSame($datum[2], NativeStrategy::compare($datum[0], $datum[1]));
        }
    }

    public function testDivide()
    {
        // $a / $b = $c
        // a, b, c
        $data = array(
        );

        foreach ($data as $datum) {
            $this->assertSame($datum[2], NativeStrategy::divide($datum[0], $datum[1]));
        }
    }

    public function testModulus()
    {
        // $a % $b = $c
        // a, b, c
        $data = array(
        );

        foreach ($data as $datum) {
            $this->assertSame($datum[2], NativeStrategy::modulus($datum[0], $datum[1]));
        }
    }

    public function testInverse()
    {
        // a, b, c
        $data = array(
        );

        foreach ($data as $datum) {
            $this->assertSame($datum[2], NativeStrategy::inverse($datum[0], $datum[1]));
        }
    }

    public function testMultiply()
    {
        // $a * $b = $c
        // a, b, c
        $data = array(
            array(0, 0, 0),
            array(1, -1, -1),
            array(10, 10, 100),
            array('10000000000000000', '10000000000000000', 10000000000000000),
        );

        foreach ($data as $datum) {
            $this->assertSame($datum[2], NativeStrategy::multiply($datum[0], $datum[1]));
        }
    }

    public function testAdd()
    {
        // $a + $b = $c
        // a, b, c
        $data = array(
            array(0, 0, 0),
            array(1, 1, 2),
        );

        foreach ($data as $datum) {
            $this->assertSame($datum[2], NativeStrategy::add($datum[0], $datum[1]));
        }
    }

    public function testSubtract()
    {
        // $a - $b = $c
        // a, b, c
        $data = array(
            array(0, 0, 0),
            array(1, 1, 0),
        );

        foreach ($data as $datum) {
            $this->assertSame($datum[2], NativeStrategy::subtract($datum[0], $datum[1]));
        }
    }
}
