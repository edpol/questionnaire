<?php

$request = new HttpRequest();
$request->setUrl('http://localhost:8080/api/question/13');
$request->setMethod(HTTP_METH_GET);

$request->setHeaders(array(
    'cache-control' => 'no-cache',
    'Connection' => 'keep-alive',
    'accept-encoding' => 'gzip, deflate',
    'Host' => 'localhost:8080',
    'Postman-Token' => 'd2eabdac-9057-4bdd-8f7d-3c3efdb8ffc2,e43fec07-6b26-450a-b074-60c61fa6f6d8',
    'Cache-Control' => 'no-cache',
    'Accept' => '*/*',
    'User-Agent' => 'PostmanRuntime/7.15.0'
));

try {
    $response = $request->send();

    echo $response->getBody();
} catch (HttpException $ex) {
    echo $ex;
}
