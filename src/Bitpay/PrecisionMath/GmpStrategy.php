<?php

namespace Bitpay\PrecisionMath;

class GmpStrategy implements StrategyInterface
{
    public static function toString($a)
    {
        return gmp_strval($a);
    }

    public static function toInteger($a)
    {
        return gmp_intval($a);
    }
    public static function compare($a, $b) {}
    public static function divide($a, $b) {}
    public static function modulus($a, $b) {}
    public static function inverse($a, $b) {}
    public static function multiply($a, $b) {}
    public static function add($a, $b)
    {
        return gmp_add($a, $b);
    }
    public static function subtract($a, $b) {}
}
