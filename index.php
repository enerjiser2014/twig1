<?php


session_start();

require_once __DIR__ . '/autoload.php';
require_once __DIR__ . '/vendor/autoload.php';


$route = explode('/', $_GET['__route']);

$controller = $route[0];
$method = $route[1];

try {
    //Если не авторизован то показываем форму
    if(\App\Classes\Auth::checkAuth() == false AND $controller != 'LogController') {
            $controller='LogController';
            $method='actionAuthForm';
    }

    //Если все ок. можно показать остальные страницы.
    if (true == empty($controller)) {
        $controller = 'App\\Controllers\\Main';
        $method = 'actionShow';
    }
    else {
        $controller = 'App\\Controllers\\' . $controller;
    }


    if (false == method_exists($controller, $method)) {
        throw new Exception('<br>index:<br>Метод ' . $method . ' класса ' . $controller . ' ненайден.');
    }

    $ctrl = new $controller();
    $ctrl->$method();
}
    catch (Exception $e)
    {
    echo $e->getMessage();
    }
