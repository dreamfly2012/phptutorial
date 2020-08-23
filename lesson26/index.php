<?php


require 'vendor/autoload.php';

use Elasticsearch\ClientBuilder;


$hosts = [
    '127.0.0.1:9200'
    // '192.168.1.1:9200',         // IP + Port
    // '192.168.1.2',              // Just IP
    // 'mydomain.server.com:9201', // Domain + Port
    // 'mydomain2.server.com',     // Just Domain
    // 'https://localhost',        // SSL to localhost
    // 'https://192.168.1.3:9200'  // SSL to IP + Port
];

$client = ClientBuilder::create()->setHosts($hosts)->build();

//创建index => table  mapping => field
$params = [
    'index' => 'my_index',
    'body' => [
        'mappings' => [
            'properties' => [
                'first_name' => [
                    'type' => 'text',
                    'analyzer' => 'ik_max_word'
                ],
                'age' => [
                    'type' => 'integer'
                ]
            ]

        ]
    ]
];

$response = $client->index($params);
print_r($response);
