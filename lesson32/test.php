<?php

class Controllercommonfooter
{
    protected function index()
    {
        echo 'abcd';
    }
}

$reflection_class = new ReflectionClass('Controllercommonfooter');
var_dump($reflection_class); #output_1
$reflection_method = $reflection_class->getMethod('index');
var_dump($reflection_method); #output_2
var_dump($reflection_method->isProtected()); #output_3

$class = 'Controllercommonfooter';
$method = 'index';
$args = array();

$controller = new $class();
$controller->$method($args);


