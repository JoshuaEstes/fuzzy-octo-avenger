<?php

namespace Bitpay;

/**
 */
class Config implements ConfigInterface
{

    /**
     * @var array
     */
    protected $options;

    /**
     */
    public function __construct()
    {
        $this->options = array();
    }

    /**
     * @inheritdoc
     */
    public function set($key, $value)
    {
        $this->options[$key] = $value;
    }

    /**
     * @inheritdoc
     */
    public function get($key, $default = null)
    {
        if (isset($this->options[$key])) {
            return $this->options[$key];
        }

        return $default;
    }
}
