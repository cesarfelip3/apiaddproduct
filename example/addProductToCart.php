<?php

// Add product to cart
/*curl http://dev.ussa.org/ecommerce/magento/index.php/restconnect/index/ussa \
   -d email=example@gmail.com \
   -d sku=product11 \
   -d qty=1 \
   -d method=addProductToCart*/
$restUrl = 'http://dev.ussa.org/ecommerce/magento/index.php/restconnect/index/ussa';
$restUrl = 'http://127.0.0.1/Magento/ussa/index.php/restconnect/index/ussa';

$data = array(
    'ticket' => $_REQUEST['ticket'],
    'sku' => 'recurring11',
    'qty' => 1,
    'method'=> 'addProductToCart'
);

$ch = curl_init($restUrl);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_HEADER, TRUE);
//curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//    'Content-Type: application/jsonp',
//    'Content-Length: ' . strlen($data_string))
//);

$result = curl_exec($ch);
print_r($result);

//$obj = json_decode($result);
//print_r($obj);
//if(is_object($obj) && $obj->error == 601) {
//    echo "Error of customer";
//    echo $obj->error_description;
//}
//else {
//    echo "Customer is present";
//}
curl_close($ch);
