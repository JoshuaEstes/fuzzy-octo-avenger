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

    /**
     * Generates new key pairs
     */
    public function generate();

    /**
     * @return boolean
     */
    public function isCompressed();

    /**
     * @return boolean
     */
    public function hasPrivate();

    /**
     * @return boolean
     */
    public function hasPublic();
}
