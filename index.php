<?php

// Front Controller

// show errors
ini_set('display_errors', 1);
error_reporting(E_ALL);


// including system files
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/config/db_params.php');
require_once(ROOT . '/components/autoload.php');


// creating Router object and call run() method
$router = new Router();
$router->run();