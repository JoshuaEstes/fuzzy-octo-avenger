<?php

namespace Bitpay;

/**
 */
interface ConfigInterface
{

    /**
     * @param string $key
     * @param mixed  $value
     */
    public function set($key, $value);

    /**
     * @param string $key
     * @param mixed  $default
     */
    public function get($key, $default = null);
}
