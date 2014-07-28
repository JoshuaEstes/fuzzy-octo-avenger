<?php

namespace Bitpay;

/**
 * Creates a bill for the calling merchant
 */
interface BillInterface
{

    /**
     * @return array
     */
    public function getItems();

    /**
     * @return Currency
     */
    public function getCurrency();

    /**
     * @return string
     */
    public function getName();

    /**
     * $address = array($lineOne, $lineTwo);
     *
     * @return array
     */
    public function getAddress();

    /**
     * @return string
     */
    public function getCity();

    /**
     * @return string
     */
    public function getState();

    /**
     * @return string
     */
    public function getZip();

    /**
     * @return string
     */
    public function getCountry();

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @return string
     */
    public function getPhone();

    /**
     * @return string
     */
    public function getStatus();

    /**
     * @return string
     */
    public function getShowRate();

    /**
     * @return string
     */
    public function getArchived();
}
