<?php

$redis = new Redis();

$redis->connect('127.0.0.1', 6379);

$name = $redis->get('name');

echo $name;

// $result = $redis->lpush('list', 1);

// $result = $redis->lpush('list', 2);

// $result = $redis->lpush('list', 3);

// $redis->hset('set', 'name', 'hello');

// $redis->hset('set', 'age', 20);
