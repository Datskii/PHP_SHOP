<?php

// FRONT CONTROLLER

// 1. Общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();

// 2. Подключение файлов системы
define('ROOT_DIR', dirname(__FILE__));

require_once (ROOT_DIR. '/components/Autoload.php');
spl_autoload_register([new Autoload(), 'loadClass']);

// 4. Вызов Router
$router = new Router();
$router->run();
