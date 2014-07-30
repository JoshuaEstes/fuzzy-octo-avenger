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

    public function testSetPrice()
    {
    }

    public function testGetCurrency()
    {
        $this->assertNull($this->invoice->getCurrency());
    }

    public function testSetCurrency()
    {
    }

    public function testGetItem()
    {
        $this->assertInstanceOf('Bitpay\ItemInterface', $this->invoice->getItem());
    }

    public function testSetItem()
    {
    }

    public function testGetBuyer()
    {
        $this->assertInstanceOf('Bitpay\BuyerInterface', $this->invoice->getBuyer());
    }

    public function testSetBuyer()
    {
    }

    public function testGetTransactionSpeed()
    {
        $this->assertSame(Invoice::TRANSACTION_SPEED_MEDIUM, $this->invoice->getTransactionSpeed());
    }

    public function testSetTransactionSpeed()
    {
    }

    public function testGetNotificationEmail()
    {
        $this->assertNull($this->invoice->getNotificationEmail());
    }

    public function testSetNotificationEmail()
    {
    }

    public function testGetNotificationUrl()
    {
        $this->assertNull($this->invoice->getNotificationUrl());
    }

    public function testSetNotificationUrl()
    {
    }

    public function testGetRedirectUrl()
    {
        $this->assertNull($this->invoice->getRedirectUrl());
    }

    public function testSetRedirectUrl()
    {
    }

    public function testGetPosData()
    {
        $this->assertNull($this->invoice->getPosData());
    }

    public function testSetPosData()
    {
    }

    public function testGetStatus()
    {
        $this->assertNull($this->invoice->getStatus());
    }

    public function testSetStatus()
    {
    }

    public function testIsFullNotifications()
    {
        $this->assertFalse($this->invoice->isFullNotifications());
    }

    public function testGetId()
    {
        $this->assertNull($this->invoice->getId());
    }

    public function testSetId()
    {
    }

    public function testGetUrl()
    {
        $this->assertNull($this->invoice->getUrl());
    }

    public function testSetUrl()
    {
    }

    public function testGetBtcPrice()
    {
        $this->assertNull($this->invoice->getBtcPrice());
    }

    public function testSetBtcPrice()
    {
    }

    public function testGetInvoiceTime()
    {
        $this->assertNull($this->invoice->getInvoiceTime());
    }

    public function testSetInvoiceTime()
    {
    }

    public function testGetExpirationTime()
    {
        $this->assertNull($this->invoice->getExpirationTime());
    }

    public function testSetExpirationTime()
    {
    }

    public function testGetCurrentTime()
    {
        $this->assertNull($this->invoice->getCurrentTime());
    }

    public function testSetCurrentTime()
    {
    }

    public function testGetOrderId()
    {
        $this->assertNull($this->invoice->getOrderId());
    }

    public function testSetOrderId()
    {
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
        return $this->getMock('Bitpay\ItemIterface');
    }

    private function getMockBuyer()
    {
        return $this->getMock('Bitpay\BuyerInterface');
    }
}
