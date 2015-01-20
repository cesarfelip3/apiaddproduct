<?php

// Add product to cart
/*curl http://dev.ussa.org/ecommerce/magento/index.php/restconnect/index/ussa \
   -d apikey=apikey \
   -d apipassword=apipassword \
   -d sku=product11 \
   -d qty=1 \
   -d method= 'addProductToCart'*/
$restUrl = 'http://dev.ussa.org/ecommerce/magento/index.php/restconnect/index/ussa';

$data = array(
    'apikey' => 'apikey',
    'apipassword' => 'password',
    'sku' => 'recurring11',
    'qty' => 1,
    'method'=> 'addProductToCart'
);

//$data_string = json_encode($data);

$ch = curl_init($restUrl);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_HEADER, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/jsonp',
    'Content-Length: ' . strlen($data_string))
);

$result = curl_exec($ch);

print_r($result);

curl_close($ch);
