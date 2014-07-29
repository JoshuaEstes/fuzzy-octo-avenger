<?php

namespace Bitpay;

/**
 */
class Item implements ItemInterface
{

    /**
     * @var string
     */
    protected $itemCode;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $price;

    /**
     * @var integer
     */
    protected $quantity;

    /**
     * @var boolean
     */
    protected $physical;

    /**
     * @inheritdoc
     */
    public function getItemCode()
    {
        return $this->itemCode;
    }

    /**
     * @inheritdoc
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @inheritdoc
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @inheritdoc
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @inheritdoc
     */
    public function isPhysical()
    {
        return $this->physical;
    }

    /**
     * @param string $itemCode
     *
     * @return ItemInterface
     */
    public function setItemCode($itemCode)
    {
        $this->itemCode = $itemCode;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return ItemInterface
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param float $price
     *
     * @return ItemInterface
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @param boolean $physical
     *
     * @return ItemInterface
     */
    public function setPhysical($physical)
    {
        $this->physical = (boolean) $physical;

        return $this;
    }
}
