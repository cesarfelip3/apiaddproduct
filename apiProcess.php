<?php

if ($_POST) {
    $baseUrl = 'http://dev.ussa.org/ecommerce/magento/index.php/';
    $restUrl = $baseUrl . 'restconnect/index/addProduct';
    $redirectUrl = $baseUrl . 'checkout/cart';
    
    $data = array(
        'apikey' => 'apikey',
        'apipassword' => 'password',
        'productsku' => 'product1',
        'qty' => 1
    );

    $data_string = json_encode($data);

    $ch = curl_init($restUrl);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/jsonp',
        'Content-Length: ' . strlen($data_string))
    );

    $result = curl_exec($ch);
    curl_close($ch);
    print_r(($result));
    header('Location: ' . $redirectUrl);
}
?>