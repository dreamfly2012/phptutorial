<?php

include __DIR__ . "./../vendor/autoload.php";

use QL\QueryList;

$image = QueryList::get('https://www.bilibili.com/video/BV1b7411R7Ba?spm_id_from=333.5.b_746563686e6f6c6f67795f7370656563685f636f75727365.10')->find('meta[itemprop=image]')->attr('content');

echo "<img src='" . $image . "'/>";
