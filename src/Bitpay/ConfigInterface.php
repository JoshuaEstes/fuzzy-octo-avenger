<?php

namespace Bitpay;

/**
 */
interface ConfigInterface
{

    /**
     * @param string $key
     * @param string $value
     */
    public function set($key, $value);

    /**
     * @param string $key
     */
    public function get($key);
}
