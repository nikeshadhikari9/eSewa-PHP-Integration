<?php

//actual amount of product
$amount = 1000;

//tax amount to be applied on product
$tax_amount = 10;

//transaction uuid (i.e. id for each transaction, please use alphanumeric characters and hyphen(-) only)
$transaction_uuid = strval(rand(10000, 99999));

//product_service_charge is a charge included by merchant on product or service
$product_service_charge = 50;

//delivery charge by merchant on product 
$product_delivery_charge = 120;

//total payment amount including tax, service and deliver charge. [i.e total_amount= amount+ tax_amount+ product_service_charge + product_delivery_charge ] 
$total_amount = $amount + $tax_amount + $product_service_charge + $product_delivery_charge;

//a redirect URL of merchant application where customer will be redirected after SUCCESSFUL transaction 
//change 'e-Sewa_in_php' to your root folder name during testing
//during production replace the below url to actual website url contaning a successful payment page(e.g., https://renthub.com.np/esewa_success.php)
$success_url = "http://localhost/e-Sewa_in_php/esewa_success.php";

//a redirect URL of merchant application where customer will be redirected after FAILURE or PENDING transaction 
//change 'e-Sewa_in_php' to your root folder name during testing
//during production replace the below url to actual website url contaning a failure payment page(e.g., https://renthub.com.np/esewa_failure.php)
$failure_url = "http://localhost/e-Sewa_in_php/esewa_failure.php";

//parameters(total_amount,transaction_uuid,product_code) should be mandatory and should be in the same order while creating the signature
$signed_field_names = "total_amount,transaction_uuid,product_code";

//creating signature raw before hashing it
$signature_raw = "total_amount=$total_amount,transaction_uuid=$transaction_uuid,product_code=$product_code";

//creating signature as base64 hashes using HMAC SHA256
$signature = base64_encode(hash_hmac('sha256', $signature_raw, $secret_key, true));
