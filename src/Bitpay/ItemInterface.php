<?php

namespace Bitpay;

/**
 * Item that was sold
 */
interface ItemInterface
{

    /**
     * @return string
     */
    public function getItemCode();

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @return string
     */
    public function getPrice();

    /**
     * @return string
     */
    public function getQuantity();

    /**
     * @return boolean
     */
    public function isPhysical();
}
