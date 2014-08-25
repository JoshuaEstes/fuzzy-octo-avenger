<?php

namespace Bitpay\PrecisionMath;

/**
 * Uses plain old PHP functions, not recommended
 */
class NativeStrategy implements StrategyInterface
{
    public static function toString($a)
    {
        return (string) $a;
    }
    public static function toInteger($a) {}
    public static function compare($a, $b) {}
    public static function divide($a, $b) {}
    public static function modulus($a, $b) {}
    public static function inverse($a, $b) {}
    public static function multiply($a, $b) {}
    public static function add($a, $b)
    {
        return $a + $b;
    }
    public static function subtract($a, $b) {}
}
