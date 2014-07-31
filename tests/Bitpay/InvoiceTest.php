<?php

namespace Bitpay;

use Bitpay\Invoice;

class InvoiceTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        $this->invoice = new Invoice();
    }

    public function testGetPrice()
    {
        $this->assertNull($this->invoice->getPrice());
    }

    /**
     * @depends testGetPrice
     */
    public function testSetPrice()
    {
        $this->invoice->setPrice(9.99);
        $this->assertSame(9.99, $this->invoice->getPrice());
    }

    public function testGetCurrency()
    {
        $this->assertNull($this->invoice->getCurrency());
    }

    /**
     * @depends testGetCurrency
     */
    public function testSetCurrency()
    {
        $currency = $this->getMockCurrency();
        $this->invoice->setCurrency($currency);
        $this->assertSame($currency, $this->invoice->getCurrency());
    }

    public function testGetItem()
    {
        $this->assertInstanceOf('Bitpay\ItemInterface', $this->invoice->getItem());
    }

    /**
     * @depends testGetItem
     */
    public function testSetItem()
    {
        $item = $this->getMockItem();
        $this->invoice->setItem($item);
        $this->assertSame($item, $this->invoice->getItem());
    }

    public function testGetBuyer()
    {
        $this->assertInstanceOf('Bitpay\BuyerInterface', $this->invoice->getBuyer());
    }

    /**
     * @depends testGetBuyer
     */
    public function testSetBuyer()
    {
        $buyer = $this->getMockBuyer();
        $this->invoice->setBuyer($buyer);
        $this->assertSame($buyer, $this->invoice->getBuyer());
    }

    public function testGetTransactionSpeed()
    {
        $this->assertSame(Invoice::TRANSACTION_SPEED_MEDIUM, $this->invoice->getTransactionSpeed());
    }

    /**
     * @depends testGetTransactionSpeed
     */
    public function testSetTransactionSpeed()
    {
        $this->invoice->setTransactionSpeed(Invoice::TRANSACTION_SPEED_MEDIUM);
        $this->assertSame(Invoice::TRANSACTION_SPEED_MEDIUM, $this->invoice->getTransactionSpeed());
    }

    public function testGetNotificationEmail()
    {
        $this->assertNull($this->invoice->getNotificationEmail());
    }

    /**
     * @depends testGetNotificationEmail
     */
    public function testSetNotificationEmail()
    {
        $this->invoice->setNotificationEmail('josh@bitpay.com');
        $this->assertSame('josh@bitpay.com', $this->invoice->getNotificationEmail());
    }

    public function testGetNotificationUrl()
    {
        $this->assertNull($this->invoice->getNotificationUrl());
    }

    /**
     * @depends testGetNotificationUrl
     */
    public function testSetNotificationUrl()
    {
        $this->invoice->setNotificationUrl('http://bitpay.com');
        $this->assertSame('http://bitpay.com', $this->invoice->getNotificationUrl());
    }

    public function testGetRedirectUrl()
    {
        $this->assertNull($this->invoice->getRedirectUrl());
    }

    /**
     * @depends testGetRedirectUrl
     */
    public function testSetRedirectUrl()
    {
        $this->invoice->setRedirectUrl('http://bitpay.com');
        $this->assertSame('http://bitpay.com', $this->invoice->getRedirectUrl());
    }

    public function testGetPosData()
    {
        $this->assertNull($this->invoice->getPosData());
    }

    /**
     * @depends testGetPosData
     */
    public function testSetPosData()
    {
        $this->invoice->setPosData('http://bitpay.com');
        $this->assertSame('http://bitpay.com', $this->invoice->getPosData());
    }

    public function testGetStatus()
    {
        $this->assertNull($this->invoice->getStatus());
    }

    /**
     * @depends testGetStatus
     */
    public function testSetStatus()
    {
        $this->invoice->setStatus('new');
        $this->assertSame('new', $this->invoice->getStatus());
    }

    public function testIsFullNotifications()
    {
        $this->assertFalse($this->invoice->isFullNotifications());
    }

    public function testGetId()
    {
        $this->assertNull($this->invoice->getId());
    }

    /**
     * @depends testGetId
     */
    public function testSetId()
    {
        $this->invoice->setId('af7as6fd97ad6fa');
        $this->assertSame('af7as6fd97ad6fa', $this->invoice->getId());
    }

    public function testGetUrl()
    {
        $this->assertNull($this->invoice->getUrl());
    }

    /**
     * @depends testGetUrl
     */
    public function testSetUrl()
    {
        $this->invoice->setUrl('https://bitpay.com/invoice?id=af7as6fd97ad6fa');
        $this->assertSame('https://bitpay.com/invoice?id=af7as6fd97ad6fa', $this->invoice->getUrl());
    }

    public function testGetBtcPrice()
    {
        $this->assertNull($this->invoice->getBtcPrice());
    }

    /**
     * @depends testGetBtcPrice
     */
    public function testSetBtcPrice()
    {
        $this->invoice->setBtcPrice(0.001);
        $this->assertSame(0.001, $this->invoice->getBtcPrice());
    }

    public function testGetInvoiceTime()
    {
        $this->assertNull($this->invoice->getInvoiceTime());
    }

    /**
     * @depends testGetInvoiceTime
     */
    public function testSetInvoiceTime()
    {
        $date = new \DateTime();
        $this->invoice->setInvoiceTime($date);
        $this->assertSame($date, $this->invoice->getInvoiceTime());
    }

    public function testGetExpirationTime()
    {
        $this->assertNull($this->invoice->getExpirationTime());
    }

    /**
     * @depends testGetExpirationTime
     */
    public function testSetExpirationTime()
    {
        $date = new \DateTime();
        $this->invoice->setExpirationTime($date);
        $this->assertSame($date, $this->invoice->getExpirationTime());
    }

    public function testGetCurrentTime()
    {
        $this->assertNull($this->invoice->getCurrentTime());
    }

    /**
     * @depends testGetCurrentTime
     */
    public function testSetCurrentTime()
    {
        $date = new \DateTime();
        $this->invoice->setCurrentTime($date);
        $this->assertSame($date, $this->invoice->getCurrentTime());
    }

    public function testGetOrderId()
    {
        $this->assertNull($this->invoice->getOrderId());
    }

    /**
     * @depends testGetOrderId
     */
    public function testSetOrderId()
    {
        $this->invoice->setOrderId('100001');
        $this->assertSame('100001', $this->invoice->getOrderId());
    }

    public function testGetItemDesc()
    {
        $this->assertNull($this->invoice->getItemDesc());
    }

    public function testSetItemDesc()
    {
    }

    public function testGetItemCode()
    {
        $this->assertNull($this->invoice->getItemCode());
    }

    public function testSetItemCode()
    {
    }

    public function testIsPhysical()
    {
        $this->assertFalse($this->invoice->isPhysical());
    }

    public function testGetBuyerName()
    {
        $this->assertEmpty($this->invoice->getBuyerName());
    }

    public function testSetBuyerName()
    {
    }

    public function testGetBuyerAddress1()
    {
        $this->assertNull($this->invoice->getBuyerAddress1());
    }

    public function testSetBuyerAddress1()
    {
    }

    public function testGetBuyerAddress2()
    {
        $this->assertNull($this->invoice->getBuyerAddress2());
    }

    public function testSetBuyerAddress2()
    {
    }

    public function testGetBuyerCity()
    {
        $this->assertNull($this->invoice->getBuyerCity());
    }

    public function testSetBuyerCity()
    {
    }

    public function testGetBuyerState()
    {
        $this->assertNull($this->invoice->getBuyerState());
    }

    public function testSetBuyerState()
    {
    }

    public function testGetBuyerZip()
    {
        $this->assertNull($this->invoice->getBuyerZip());
    }

    public function testSetBuyerZip()
    {
    }

    public function testGetBuyerCountry()
    {
        $this->assertNull($this->invoice->getBuyerCountry());
    }

    public function testSetBuyerCountry()
    {
    }

    public function testGetBuyerEmail()
    {
        $this->assertNull($this->invoice->getBuyerEmail());
    }

    public function testSetBuyerEmail()
    {
    }

    public function testGetBuyerPhone()
    {
        $this->assertNull($this->invoice->getBuyerPhone());
    }

    public function testSetBuyerPhone()
    {
    }

    private function getMockItem()
    {
        return new \Bitpay\Item();
    }

    private function getMockBuyer()
    {
        return new \Bitpay\Buyer();
    }

    private function getMockCurrency()
    {
        return new \Bitpay\Currency();
    }
}
