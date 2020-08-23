<?php

// $files = scandir("./images");

// print_r($files);

// $files = glob("./images/*.jpg");

// print_r($files);

#$fp = fopen("./files/1.txt", "r");

// $line = fgets($fp,1024);
// print_r($line);

// while(($line = fgets($fp,1024))!==false){
//     print_r($line);
// }

// $content = file_get_contents("./files/1.txt");

// print_r($content);

// $fp = fopen("./files/log.txt", "a");
// $data = 'message'.PHP_EOL;
// fwrite($fp, $data);
//fwrite($fp, "this is a text!");
$data = ['info'=>'消息','time'=>date('Y-m-d H:i:s')];
$data = json_encode($data);
#file_put_contents("./files/data.txt", $data);

file_put_contents("./files/data.txt", $data .PHP_EOL , FILE_APPEND);