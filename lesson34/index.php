<?php

$q = new SplStack();

$q[] = 1;
$q[] = 2;
$q[] = 3;
$q->push(4);
$q->add(4, 5);

$item = $q->pop();

var_dump($item);

var_dump($q);