<?php

use dreamfly\AuthorQuery;

require_once "vendor/autoload.php";

require_once "./generated-conf/config.php";

// $auhtor = new Author;

// $auhtor->setFirstName("Tom");
// $auhtor->setLastName("Jerry");

// $auhtor->save();

$query = new AuthorQuery();

$author = $query->filterByLastName("Jerry")->findOne();

var_dump($author);

$firstname = $author->getFirstName();

var_dump($firstname);
