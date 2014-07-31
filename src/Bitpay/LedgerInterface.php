<?php

namespace Bitpay;

/**
 * Ledger Record
 */
interface LedgerInterface
{

    const CODE_1000 = 'sale';
    const CODE_SALE = 1000;

    const SOURCE_NULL       = null;
    const SOURCE_INVOICE    = 'invoice';
    const SOURCE_BITCOIN_TX = 'bitcoinTx';

    /**
     * @return CurrencyInterface
     */
    public function getCurrency();

    /**
     * @return DateTime
     */
    public function getStartDate();

    /**
     * @return DateTime
     */
    public function getEndDate();

    /**
     * @return integer
     */
    public function getCode();

    /**
     * @return string
     */
    public function getAmount();

    /**
     * @return DateTime
     */
    public function getTimestamp();

    /**
     * $this->invoice->getDescription();
     */
    public function getDescription();

    /**
     * $this->invoice->getOrderId();
     */
    public function getOrderId();

    /**
     * @return string
     */
    public function getTxType();

    /**
     * @return array
     */
    public function getExRates();

    /**
     * @return BuyerInterface
     */
    public function getBuyer();

    /**
     * @return InvoiceInterface
     */
    public function getInvoice();

    /**
     * $this->invoice->getId();
     */
    public function getInvoiceId();

    /**
     * @return string
     */
    public function getSourceType();
}
