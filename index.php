<?php
/*
    $string = '21-11-2015';

    $pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';

    $replacement = 'Month: $2, Day: $1, Year: $3!';

    echo preg_replace($pattern, $replacement, $string);

    die;
*/

    //FRONT CONTROLLER

    //1. Общие настройки
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    session_start();

    //2. Подключение файлов системы
    define('ROOT', dirname(__FILE__));
    require_once(ROOT.'/components/Autoload.php');
//    require_once(ROOT.'/components/Router.php');
//    require_once(ROOT.'/components/Db.php');

    //3. Установка соединения с БД

    //4. Вызов Router
    $router = new Router();
    $router->run();