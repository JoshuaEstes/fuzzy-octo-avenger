<?php

namespace Bitpay\Util;

interface Base58Interface
{
    public function encode($data);
    public function decode($data);
}
