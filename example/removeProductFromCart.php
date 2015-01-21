<?php

$restUrl = 'http://dev.ussa.org/ecommerce/magento/index.php/restconnect/index/ussa';

$data = array(
    'apikey' => 'apikey',
    'apipassword' => 'password',
    'sku' => 'recurring11',
    'method' => 'deleteProductFromCart'
);

$ch = curl_init($restUrl);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
curl_close($ch);
