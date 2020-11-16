<?php

// FRONT CONTROLLER


session_start();

// Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
include_once ROOT . '/components/Db.php';

// Вызов Router
$router = new Router();
$router->run();