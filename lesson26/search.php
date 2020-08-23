<?php

require 'vendor/autoload.php';

use Elasticsearch\ClientBuilder;

$client = ClientBuilder::create()->build();

$params = [
    'index' => 'my_index',
    '_source' => ['first_name', 'age'], // 请求指定的字段
    'body' => [
        'query' => [
            'match' => [
                'first_name' => '我',
            ]
        ]
    ]
];

$response = $client->search($params);

print_r($response);
