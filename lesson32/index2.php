<?php

use Gui\Application;
use Gui\Components\Window;
use Gui\Components\Button;

require_once "vendor/autoload.php";

$application = new Application();

$application->on('start', function () use ($application) {
    $button = (new Button())
        ->setLeft(40)
        ->setValue('点我啊')
        ->setTop(40);

    $button->on('click', function () use ($application, $button) {
        $button->setValue('Look, I\'m a clicked button!');
    });
});

$application->run();
