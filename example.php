<?php

// Add product to cart
$baseUrl = 'http://dev.ussa.org/ecommerce/magento/index.php/';
$restUrl = $baseUrl . 'restconnect/index/addProductToCart';

$data = array(
    'apikey' => 'apikey',
    'apipassword' => 'password',
    'sku' => 'product1',
    'qty' => 1
);

$data_string = json_encode($data);

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
curl_close($ch);


// Remove product from cart
$baseUrl = 'http://dev.ussa.org/ecommerce/magento/index.php/';
$restUrl = $baseUrl . 'restconnect/index/deleteProductFromCart';

$data = array(
    'apikey' => 'apikey',
    'apipassword' => 'password',
    'sku' => 'product1'
);

$data_string = json_encode($data);

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
curl_close($ch);


//Add / Update product

$baseUrl = 'http://dev.ussa.org/ecommerce/magento/index.php/';
$restUrl = $baseUrl . 'restconnect/index/addUpdateSubscriptionProduc';

$requestData['website_id'] = 1;
$requestData['attribute_set_id'] = 4;
$requestData['type_id'] = 'recurringproduct';
$requestData['sku'] = 'recurring111';
$requestData['name'] = 'Test recurring product1';
$requestData['weight'] = 1;
$requestData['tax_class_id'] = 1;
$requestData['price'] = '111';
$requestData['description'] = 'description description';
$requestData['short_description'] = 'short description description';

$requestData['tax_class_id'] = 1;
$requestData['manage_stock'] = 1;
$requestData['min_sale_qty'] = 1;
$requestData['max_sale_qty'] = 2;
$requestData['is_in_stock'] = 1;
$requestData['qty'] = 999;
$requestData['category_id'] = 3;
$requestData['subscription_unit'] = 1; //1->Daily,2->Weekly,3->monthly,4->quaterly,5->Twice a yer,6->yearly
$requestData['total_occurences'] = 5;

$data = array(
    'apikey' => 'apikey',
    'apipassword' => 'password',
    'product' => $requestData
);

$data_string = json_encode($data);

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
curl_close($ch);
