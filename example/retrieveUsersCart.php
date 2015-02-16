<?php

$restUrl = 'http://dev.ussa.org/ecommerce/magento/index.php/restconnect/index/ussa';
$restUrl = 'http://127.0.0.1/Magento/ussa/index.php/restconnect/index/ussa';

$data = array(
    'ticket' => $_REQUEST['ticket'],
    'method' => 'retrieveUsersCart'
);

$ch = curl_init($restUrl);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
print_r($result);
curl_close($ch);
