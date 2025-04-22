<?php

// Set mode: 'sandbox' for testing purpose 
// set mode: 'live' for production
$mode = 'sandbox';

$config = [
    'sandbox' => [
        //product_key, secret_key and base_url provided by esewa for testing purpose
        'product_code' => 'EPAYTEST',
        'secret_key'   => '8gBm/:&EnhH.1/q',
        'base_url'     => 'https://rc-epay.esewa.com.np/api/epay/main/v2/form' // eSewa sandbox URL
    ],
    'live' => [
        //add product_code or Merchant code provided by eSewa
        'product_code' => 'PRODUCT_CODE_HERE',
        //add secret_Key provided from eSewa
        'secret_key'   => 'SECRET_KEY_HERE',
        //base url for sending esewa_payment_form for merchant
        'base_url'     => 'https://epay.esewa.com.np/api/epay/main/v2/form' // eSewa live URL
    ]
];

$product_code = $config[$mode]['product_code'];
$secret_key   = $config[$mode]['secret_key'];
$esewa_url    = $config[$mode]['base_url'];
