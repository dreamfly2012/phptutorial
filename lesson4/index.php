<?php

// $a = 4;

// $b = -2;

// if ($b > $a) {
//     echo "b 大于 a";
// } elseif ($b > 0) {
//     echo "b 小于 a 且 b 大于 0";
// } else {
//     echo "b 小于 a 且 b 不大于 0";
// }

//循环输出0-9
// for ($i = 0; $i < 10; $i++) {
//     echo $i;
//     echo "<br>";
// }

// $i=0;
// while($i<10){
//     echo $i;
//     echo "<br>";
//     $i++;
// }

// $i = 0;
// do {
//     $i++;
//     echo $i;
//     echo "<br>";

// } while ($i < 10);
$a = 2;

switch ($a) {
    case 1:
        echo '它是1';
        break;
    case 2:
        echo '它是2';
        break;
    case 3:
        echo '它是3';
        break;
    case 4:
        echo '它是4';
        break;
    default:
        echo "其它";
}
