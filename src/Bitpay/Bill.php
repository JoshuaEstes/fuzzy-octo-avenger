<?php

namespace Bitpay;

/**
 */
class Bill implements BillInterface
{

    /**
     * @var array
     */
    protected $items;

    /**
     * @var CurrencyInterface
     */
    protected $currency;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var string
     */
    protected $zip;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $showRate;

    /**
     * @var string
     */
    protected $archived;

    /**
     */
    public function __construct()
    {
        $this->items = array();
    }

    /**
     * @inheritdoc
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @inheritdoc
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @inheritdoc
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @inheritdoc
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @inheritdoc
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @inheritdoc
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @inheritdoc
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @inheritdoc
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @inheritdoc
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @inheritdoc
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @inheritdoc
     */
    public function getShowRate()
    {
        return $this->showRate;
    }

    /**
     * @inheritdoc
     */
    public function getArchived()
    {
        return $this->archived;
    }

    public function addItem(ItemInterface $item)
    {
        $this->item[] = $item;

        return $this;
    }

    public function setCurrency(CurrencyInterface $currency)
    {
        $this->currency = $currency;

        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    public function setShowRate($showRate)
    {
        $this->showRate = $showRate;

        return $this;
    }

    public function setArchived($archived)
    {
        $this->archived = $archived;

        return $this;
    }
}
