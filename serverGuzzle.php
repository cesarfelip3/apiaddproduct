<?php
include_once('vendor/autoload.php');

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

try {
    //$baseUrl = 'http://127.0.0.1/Magento/ussa/index.php/';
    $baseUrl = 'http://dev.ussa.org/ecommerce/magento/index.php/';
    $requestUrl = $baseUrl . 'restconnect/index/addProduct';
    $redirectUrl = $baseUrl . 'checkout/cart';

    $client = new Client();
//$response = $client->post('http://127.0.0.1/Magento/ussa/index.php/restconnect/index/addProduct', ['body' => ['productsku' => 'product1', 'qty' => 1]]);


    $request = $client->createRequest('POST', $requestUrl);
    $request->setHeader('Set-Cookie', FALSE);
    $request->setHeader('Content-Type', 'application/json');

// 'application/json; charset=utf8'

    $postBody = $request->getBody();

// $postBody is an instance of GuzzleHttp\Post\PostBodyInterface
    $postBody->setField('productsku', $productSku);
    $postBody->setField('qty', $qty);

//echo $postBody->getField('foo');
// 'bar'
//echo json_encode($postBody->getFields());
// {"foo": "bar"}
// Send the POST request
    $response = $client->send($request);
    header('Set-Cookie: ' . $response->getHeader('set-cookie'));
    header('Location: ' . $redirectUrl);
    exit();
}
catch (RequestException $e) {
    echo $e->getRequest();
    if ($e->hasResponse()) {
        echo $e->getResponse();
    }
}