<?php

namespace Bitpay\PrecisionMath;

/**
 */
class MathContext
{

    /**
     * @var string
     */
    protected static $strategy;

    /**
     * @var MathContext
     */
    protected static $instance;

    private function __construct(StrategyInterface $strategy)
    {
        self::$strategy = get_class($strategy);
    }

    public static function getInstance(StrategyInterface $strategy)
    {
        if (is_null(self::$instance)) {
            self::$instance = new self($strategy);
        }

        return self::$instance;
    }

    private function execute($method, $a, $b = null)
    {
        $strategy = self::$strategy;

        if (is_null($b)) {
            return $strategy::$method($a);
        }

        return $strategy::$method($a, $b);
    }

    public static function toString($a)
    {
        return self::$instance->execute('toString', $a);
    }

    public static function toInteger($a)
    {
        return self::$instance->execute('toInteger', $a);
    }

    public static function compare($a, $b)
    {
        return self::$instance->execute('compare', $a, $b);
    }

    public static function divide($a, $b)
    {
        return self::$instance->execute('divide', $a, $b);
    }

    public static function modulus($a, $b)
    {
        return self::$instance->execute('modulus', $a, $b);
    }

    public static function inverse($a, $b)
    {
        return self::$instance->execute('inverse', $a, $b);
    }

    public static function multiply($a, $b)
    {
        return self::$instance->execute('multiply', $a, $b);
    }

    public static function add($a, $b)
    {
        return self::$instance->execute('add', $a, $b);
    }

    public static function subtract($a, $b)
    {
        return self::$instance->execute('subtract', $a, $b);
    }
}
