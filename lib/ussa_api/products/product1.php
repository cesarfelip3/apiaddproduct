<?php

$requestData['website_id'] = 1;
$requestData['attribute_set_id'] = 4;
$requestData['type_id'] = 'recurringproduct';
$requestData['sku'] = 'recurring11';
$requestData['name'] = 'Test recurring product1';
$requestData['weight'] = 1;
$requestData['tax_class_id'] = 1;
$requestData['price'] = '111';
$requestData['description'] = 'description';
$requestData['short_description'] = 'short description';

$requestData['tax_class_id'] = 1;
$requestData['manage_stock'] = 1;
$requestData['min_sale_qty'] = 1;
$requestData['max_sale_qty'] = 2;
$requestData['is_in_stock'] = 1;
$requestData['qty'] = 999;
$requestData['category_id'] = 3;
$requestData['subscription_unit'] = 1; //1->Daily,2->Weekly,3->monthly,4->quaterly,5->Twice a yer,6->yearly
$requestData['total_occurences'] = 5;

include_once '../serverGuzzle.php';