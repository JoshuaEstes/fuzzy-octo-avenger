<?php

require __DIR__ . '/../src/Bitpay/Autoloader.php';

\Bitpay\Autoloader::register();

/**
 * Configure
 */
$config  = new \Bitpay\Config();

/**
 * Create an Item
 */
$item = new \Bitpay\Item();
$item
    ->setCode('skuNumber')
    ->setDescription('General Description of Item')
    ->setPrice('1.99');

/**
 * Create Buyer info
 */
$buyer = new \Bitpay\Buyer();
$buyer
    ->setFirstName('Joshua')
    ->setLastName('Estes')
    ->setPhone('555-5555-5555')
    ->setEmail('josh@bitpay.com')
    ->setAddress(
        array(
            '123 Main St',
            'Suite 1',
        )
    )
    ->setCity('Atlanta')
    ->setState('GA')
    ->setZip('30120')
    ->setCountry('US');

/**
 * Create the invoice
 */
$invoice = new \Bitpay\Invoice();
// Add the item to the invoice
$invoice->setItem($item);
// Add the buyers info to invoice
$invoice->setBuyer($buyer);
// Configure the rest of the invoice
$invoice
    ->setOrderId('OrderIdFromYourSystem')
    // You will receive IPN's at this URL, Must be HTTPS
    ->setNotificationUrl('https://store.example.com/bitpay/callback');

/**
 * Create a new client
 */
$client = new \Bitpay\Client();
// Send invoice
$client->createInvoice($invoice);

/**
 * You now are able to save the new information in your system
 */

// Unique ID of invoice in the BitPay system
$id = $invoice->getId();

// View the invoice online, can also be used to forward your customer to.
$url = $invoice->getUrl();
