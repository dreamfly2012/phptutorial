<?php



include "vendor/autoload.php";

use Gui\Application;
use Gui\Components\Button;

$application  = new Application();

(new Button())
->setTop(40)
->setLeft(40)
->setWidth(100)
->setValue('我是一个button');



$application->run();