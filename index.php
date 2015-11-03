<?php


session_start();
$_SESSION['Auth']=1;

require_once __DIR__ . '/autoload.php';
require_once __DIR__ . '/vendor/autoload.php';

try {
    \App\Classes\Auth::checkAuth();
} catch (Exception $e) {
    echo $e->getMessage();
    return 0;
}


/*

$x = new \App\Models\Admin\User();
$x->email='mail@yandex.ru';
var_dump($x->setPassword('123456'));
var_dump($x->checkPassword('1213456'));

exit;

*/

$route = explode('/',$_GET['__route']);

$controller = $route[0];
$method = $route[1];


if (true == empty($controller)) {
    $controller = 'App\\Controllers\\Main';
    $method = 'actionShow';
    }
elseif ('Login' == $controller) {
    $controller = 'App\\Controllers\\Login';
    $method = 'startPoint';
    }
else {
    $controller = 'App\\Controllers\\' . $controller;
    }


try {
    if (false == method_exists($controller, $method)) {
        throw new Exception('<br>index:<br>Метод '. $method. ' класса '. $controller .' ненайден.');
    }
    $ctrl = new $controller();
    $ctrl->$method();
}
    catch (Exception $e) {
        echo $e->getMessage();
    }
