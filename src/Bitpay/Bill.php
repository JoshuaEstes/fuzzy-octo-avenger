<?php

namespace Bitpay;

/**
 */
class Bill implements BillInterface
{

    protected $items;
    protected $currency;
    protected $name;
    protected $city;
    protected $state;
    protected $zip;
    protected $country;
    protected $email;
    protected $phone;
    protected $status;
    protected $showRate;
    protected $archived;

    /**
     * @inheritdoc
     */
    public function getItems()
    {
    }

    /**
     * @inheritdoc
     */
    public function getCurrency()
    {
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
    }

    /**
     * @inheritdoc
     */
    public function getAddress()
    {
    }

    /**
     * @inheritdoc
     */
    public function getCity()
    {
    }

    /**
     * @inheritdoc
     */
    public function getState()
    {
    }

    /**
     * @inheritdoc
     */
    public function getZip()
    {
    }

    /**
     * @inheritdoc
     */
    public function getCountry()
    {
    }

    /**
     * @inheritdoc
     */
    public function getEmail()
    {
    }

    /**
     * @inheritdoc
     */
    public function getPhone()
    {
    }

    /**
     * @inheritdoc
     */
    public function getStatus()
    {
    }

    /**
     * @inheritdoc
     */
    public function getShowRate()
    {
    }

    /**
     * @inheritdoc
     */
    public function getArchived()
    {
    }
}
