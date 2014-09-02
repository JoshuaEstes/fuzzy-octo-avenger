<?php

namespace Bitpay\PrecisionMath;

/**
 * Uses plain old PHP functions, not recommended
 */
class NativeStrategy implements StrategyInterface
{
    public static function toString($a)
    {
        return strval($a);
    }
    public static function toInteger($a)
    {
        return intval($a);
    }

    public static function compare($a, $b)
    {
        if ($a > $b) {
            return 1;
        }

        if ($a == $b) {
            return 0;
        }

        if ($a < $b) {
            return -1;
        }
    }

    public static function divide($a, $b)
    {
        return $a / $b;
    }

    public static function modulus($a, $b)
    {
        return $a % $b;
    }

    public static function inverse($a, $b)
    {
        return false;
    }

    public static function multiply($a, $b)
    {
        if (!settype($a, 'string') || !settype($b, 'string')) {
            throw new \Exception('Could not covert arguments to string');
        }

        $maxint = 10;
        $aSize  = strlen($a);
        $bSize  = strlen($b);
        $chunk  = 0;

        if ($aSize > $bSize) {
            $chunk = $aSize;
        } else {
            $chunk = $bSize;
        }

        if ($chunk < $maxint) {
            return intval($a) * intval($b);
        }

        $m  = intval($chunk / 2);
        $x1 = substr($a, 0, (-1 * $m));
        $x2 = substr($a, (-1 * $m));
        $y1 = substr($b, 0, (-1 * $m));
        $y2 = substr($b, (-1 * $m));
        $a  = self::multiply($x2, $y2);
        $b  = self::multiply($x1, $y1);
        $c  = self::multiply(self::add($x1, $x2), self::add($y1, $y2));
        $d  = self::subtract(self::subtract($c, $a), $b);
        $z  = self::add($a, self::add($d, $b));

        return $z;
    }

    public static function add($a, $b)
    {
        if (!settype($a, 'string') || !settype($b, 'string')) {
            throw new \Exception('Could not covert arguments to string');
        }

        $maxint = 10;
        $aSize  = strlen($a);
        $bSize  = strlen($b);
        $chunk  = 0;

        if ($aSize < $maxint && $bSize < $maxint) {
            return intval($a) + intval($b);
        }

        return intval($a) + intval($b);
    }

    public static function subtract($a, $b)
    {
        return $a - $b;
    }
}
