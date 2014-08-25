<?php

namespace Bitpay\PrecisionMath;

class BcMathStrategy implements StrategyInterface
{
    public static function toString($a)
    {
        // BCMath doesn't have a function to convert values to strings and all
        // values are returned as strings, but the interface says this is needed
        // and is used by other math libraries.
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
        return bcadd($a, $b);
    }
    public static function subtract($a, $b) {}
}
