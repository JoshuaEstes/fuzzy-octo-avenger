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
        return $this->getItem()->getPrice();
    }

    /**
     * @param float $price
     *
     * @return InvoiceInterface
     */
    public function setPrice($price)
    {
        $this->getItem()->setPrice($price);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param CurrencyInterface $currency
     *
     * @return InvoiceInterface
     */
    public function setCurrency(CurrencyInterface $currency)
    {
        $this->currency = $currency;

        return $this;
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
     * @param ItemInterface $item
     *
     * @return InvoiceInterface
     */
    public function setItem(ItemInterface $item)
    {
        $this->item = $item;

        return $this;
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
     * @param BuyerInterface $buyer
     *
     * @return InvoiceInterface
     */
    public function setBuyer(BuyerInterface $buyer)
    {
        $this->buyer = $buyer;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getTransactionSpeed()
    {
        return $this->transactionSpeed;
    }

    /**
     * @param string $transactionSpeed
     *
     * @return InvoiceInterface
     */
    public function setTransactionSpeed($transactionSpeed)
    {
        $this->transactionSpeed = $transactionSpeed;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getNotificationEmail()
    {
        return $this->notificationEmail;
    }

    /**
     * @param string $notificationEmail
     *
     * @return InvoiceInterface
     */
    public function setNotificationEmail($notificationEmail)
    {
        $this->notificationEmail = $notificationEmail;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getNotificationUrl()
    {
        return $this->notificationUrl;
    }

    /**
     * @param string $notificationUrl
     *
     * @return InvoiceInterface
     */
    public function setNotificationurl($notificationUrl)
    {
        $this->notificationUrl = $notificationUrl;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @param string $redirectUrl
     *
     * @return InvoiceInterface
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getPosData()
    {
        return $this->posData;
    }

    /**
     * @param array|object $posData
     *
     * @return InvoiceInterface
     */
    public function setPosData($posData)
    {
        $this->posData = $posData;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return InvoiceInterface
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
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
     * @param string $id
     *
     * @return InvoiceInterface
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return InvoiceInterface
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getBtcPrice()
    {
        return $this->btcPrice;
    }

    /**
     * @param float $btcPrice
     *
     * @return InvoiceInterface
     */
    public function setBtcPrice($btcPrice)
    {
        $this->btcPrice = $btcPrice;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getInvoiceTime()
    {
        return $this->invoiceTime;
    }

    /**
     * @param DateTime $invoiceTime
     *
     * @return InvoiceInterface
     */
    public function setInvoiceTime($invoiceTime)
    {
        $this->invoiceTime = $invoiceTime;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getExpirationTime()
    {
        return $this->expirationTime;
    }

    /**
     * @param DateTime $expirationTime
     *
     * return InvoiceInterface
     */
    public function setExpirationTime($expirationTime)
    {
        $this->expirationTime = $expirationTime;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getCurrentTime()
    {
        return $this->currentTime;
    }

    /**
     * @param DateTime $currentTime
     *
     * @return InvoiceInterface
     */
    public function setCurrentTime($currentTime)
    {
        $this->currentTime = $currentTime;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     *
     * @return InvoiceInterface
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
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
