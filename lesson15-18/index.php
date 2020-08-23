<?php

require_once "vendor/autoload.php";

$loader = new \Twig\Loader\FilesystemLoader('./views/templates');
$twig = new \Twig\Environment($loader, [
    'cache' => './views/cache',
]);

use Medoo\Medoo;
 
$database = new Medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'tutorial',
	'server' => 'localhost',
	'username' => 'root',
	'password' => 'root',
 
	// [optional]
	'charset' => 'utf8mb4',
	'collation' => 'utf8mb4_general_ci',
	'port' => 3306,
 
	// [optional] Table prefix
	'prefix' => '',
 
	// [optional] Enable logging (Logging is disabled by default for better performance)
	'logging' => true,
 
	// [optional] MySQL socket (shouldn't be used with server and port)
	'socket' => '/tmp/mysql.sock',
 
	// [optional] driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
	'option' => [
		PDO::ATTR_CASE => PDO::CASE_NATURAL
	],
 
	// [optional] Medoo will execute those commands after connected to the database for initialization
	'command' => [
		'SET SQL_MODE=ANSI_QUOTES'
	]
]);



include_once "controller.php";



