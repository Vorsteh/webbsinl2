<?php

session_start();
const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require base_path("{$class}.php");
});

require base_path('bootstrap.php');

//$router = new \Core\Router();
$router = new \Core\Routershit();
$routes = require base_path('routes.php');

