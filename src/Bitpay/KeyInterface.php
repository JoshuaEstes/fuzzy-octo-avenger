<?php

namespace Bitpay;

interface KeyInterface
{

    /**
     * @param string $path
     */
    public function savePublicTo($path);

    /**
     * @param string $path
     */
    public function savePrivateTo($path);
}
