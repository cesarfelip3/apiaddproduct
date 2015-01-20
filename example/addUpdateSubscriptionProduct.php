<?php

//Add / Update product
$restUrl = 'http://dev.ussa.org/ecommerce/magento/index.php/restconnect/index/ussa';

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

$request = array(
    'apikey' => 'apikey',
    'apipassword' => 'password',
    'product' => json_encode($requestData),
    'method' => 'addUpdateSubscriptionProduct'
);

$data_string = json_encode($request);

$ch = curl_init($restUrl);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_HEADER, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/jsonp',
    'Content-Length: ' . strlen($data_string))
);

$result = curl_exec($ch);
print_r($result);
curl_close($ch);
