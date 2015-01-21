<?php

$restUrl = 'http://dev.ussa.org/ecommerce/magento/index.php/restconnect/index/ussa';

$data = array(
    'email' => 'itmyprofession@gmail.com',
    'method' => 'retrieveUsersCart'
);

$ch = curl_init($restUrl);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
print_r($result);
curl_close($ch);
