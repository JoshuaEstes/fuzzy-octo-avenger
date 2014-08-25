<?php

namespace Bitpay\Precisionmath;

/**
 * Every math strategy must implement this interface
 */
interface StrategyInterface
{

    /**
     * Converts value to string
     *
     * @return string
     */
    public static function toString($a);

    /**
     * Converts value to integer, SHOULD only be used on small numbers
     * such as a modulus return value
     *
     * @return integer
     */
    public static function toInteger($a);

    /**
     * a > b = 1
     * a = b = 0
     * a < b = -1
     *
     * @return integer
     */
    public static function compare($a, $b);

    /**
     * a / b
     *
     * @return mixed
     */
    public static function divide($a, $b);

    /**
     * a % b
     *
     * @return mixed
     */
    public static function modulus($a, $b);

    /**
     * Inverse Modulus
     *
     * @return mixed
     */
    public static function inverse($a, $b);

    /**
     * a * b
     *
     * @return mixed
     */
    public static function multiply($a, $b);

    /**
     * a + b
     *
     * @return mixed
     */
    public static function add($a, $b);

    /**
     * a - b
     *
     * @return mixed
     */
    public static function subtract($a, $b);
}
