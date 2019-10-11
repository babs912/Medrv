<?php
session_start();

define('PUBLICROOT', dirname(__FILE__));
define('ROOT', dirname(PUBLICROOT));
define('DS', DIRECTORY_SEPARATOR);
define('CORE', ROOT . DS . 'core');
define('BASE_URL', dirname(dirname($_SERVER['SCRIPT_NAME'])));
spl_autoload_register(function ($name) {
    require CORE . DS . ucfirst($name) . '.php';
});


$_SESSION['service'] = 'Cardiologie';

$dispatcher = new Dispatcher();
