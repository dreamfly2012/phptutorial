<?php

// $stack = array("ceshi1", "ceshi2");
// $stack2 = array("ceshi1", "ceshi2", "ceshi3");
// #array_push($stack, "apple", "raspberry");
// $arr = array_merge($stack, $stack2);
//print_r($arr);

// $content = file_get_contents("https://www.baidu.com");

// print_r($content);

function console_log($data)
{
    echo '<script>';
    echo 'console.log(' . json_encode($data) . ')';
    echo '</script>';
}

#phpinfo();

$a = array("a" => "red", "b" => "green", "c" => "blue");
//echo array_shift($a);
//console_log($a);

$a = 100;
$b = 200;

$c = $a * $b;

$d = $c << 2;

#print_r($d);

function a()
{

    $args = func_get_args();
    if (count($args) == 1) {
        var_dump($args[0]);
    } elseif (count($args) == 2) {
        var_dump($args[0]);
        var_dump($args[1]);
    } else {
        echo "参数个数不对";
    }

}

a(2, 3);
