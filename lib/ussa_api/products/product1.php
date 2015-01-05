<?php

$requestData['website_id'] = 1;
$requestData['attribute_set_id'] = 4;
$requestData['type_id'] = 'simple';
$requestData['sku'] = 'sku123';
$requestData['name'] = 'Test Product1';
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

include_once '../serverGuzzle.php';