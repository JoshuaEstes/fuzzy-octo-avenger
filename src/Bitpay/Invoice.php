<?php

namespace Bitpay;

/**
 */
class Invoice implements InvoiceInterface
{

    /**
     * @var CurrencyInterface
     */
    protected $currency;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var string
     */
    protected $orderId;

    /**
     * @var ItemInterface
     */
    protected $item;

    /**
     * @var string
     */
    protected $transactionSpeed;

    /**
     * @var string
     */
    protected $notificationEmail;

    /**
     * @var string
     */
    protected $notificationUrl;

    /**
     * @var string
     */
    protected $redirectUrl;

    /**
     * @var array|object
     */
    protected $posData;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var boolean
     */
    protected $fullNotifications;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var float
     */
    protected $btcPrice;

    /**
     * @var DateTime
     */
    protected $invoiceTime;

    /**
     * @var DateTime
     */
    protected $expirationTime;

    /**
     * @var DateTime
     */
    protected $currentTime;

    /**
     * @var BuyerInterface
     */
    protected $buyer;

    /**
     */
    public function __construct()
    {
        $this->transactionSpeed  = self::TRANSACTION_SPEED_MEDIUM;
        $this->fullNotifications = false;
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
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @inheritdoc
     */
    public function getItem()
    {
        // If there is not an item already set, we need to use a default item
        // so that some methods do not throw errors about methods and
        // non-objects.
        if (null == $this->item) {
            $this->item = new Item();
        }

        return $this->item;
    }

    /**
     * @inheritdoc
     */
    public function getBuyer()
    {
        // Same logic as getItem method
        if (null == $this->buyer) {
            $this->buyer = new Buyer();
        }

        return $this->buyer;
    }

    /**
     * @inheritdoc
     */
    public function getTransactionSpeed()
    {
        return $this->transactionSpeed;
    }

    /**
     * @inheritdoc
     */
    public function getNotificationEmail()
    {
        return $this->notificationEmail;
    }

    /**
     * @inheritdoc
     */
    public function getNotificationUrl()
    {
        return $this->notificationUrl;
    }

    /**
     * @inheritdoc
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @inheritdoc
     */
    public function getPosData()
    {
        return $this->posData;
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
    public function isFullNotifications()
    {
        return $this->fullNotifications;
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @inheritdoc
     */
    public function getBtcPrice()
    {
        return $this->btcPrice;
    }

    /**
     * @inheritdoc
     */
    public function getInvoiceTime()
    {
        return $this->invoiceTime;
    }

    /**
     * @inheritdoc
     */
    public function getExpirationTime()
    {
        return $this->expirationTime;
    }

    /**
     * @inheritdoc
     */
    public function getCurrentTime()
    {
        return $this->currentTime;
    }

    /**
     * @inheritdoc
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @inheritdoc
     */
    public function getItemDesc()
    {
        return $this->getItem()->getDescription();
    }

    /**
     * @inheritdoc
     */
    public function getItemCode()
    {
        return $this->getItem()->getCode();
    }

    /**
     * @inheritdoc
     */
    public function isPhysical()
    {
        return $this->getItem()->isPhysical();
    }

    /**
     * @inheritdoc
     */
    public function getBuyerName()
    {
        $firstName = $this->getBuyer()->getFirstName();
        $lastName  = $this->getBuyer()->getLastName();

        return trim($firstName . ' ' . $lastName);
    }

    /**
     * @inheritdoc
     */
    public function getBuyerAddress1()
    {
        $address = $this->getBuyer()->getAddress();

        return $address[0];
    }

    /**
     * @inheritdoc
     */
    public function getBuyerAddress2()
    {
        $address = $this->getBuyer()->getAddress();

        return $address[1];
    }

    /**
     * @inheritdoc
     */
    public function getBuyerCity()
    {
        return $this->getBuyer()->getCity();
    }

    /**
     * @inheritdoc
     */
    public function getBuyerState()
    {
        return $this->getBuyer()->getState();
    }

    /**
     * @inheritdoc
     */
    public function getBuyerZip()
    {
        return $this->getBuyer()->getZip();
    }

    /**
     * @inheritdoc
     */
    public function getBuyerCountry()
    {
        return $this->getBuyer()->getCountry();
    }

    /**
     * @inheritdoc
     */
    public function getBuyerEmail()
    {
        return $this->getBuyer()->getEmail();
    }

    /**
     * @inheritdoc
     */
    public function getBuyerPhone()
    {
        return $this->getBuyer()->getEmail();
    }
}
