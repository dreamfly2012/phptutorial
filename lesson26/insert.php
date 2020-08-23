<?php

require 'vendor/autoload.php';

use Elasticsearch\ClientBuilder;

$client = ClientBuilder::create()->build();

$params = [
    'index' => 'my_index',
    'id' => 1,
    'body' => [
        'first_name' => '我的名字叫小王',
        'age' => 22
    ]
];

$response = $client->index($params);

print_r($response);
