<?php
define('BASE_PATH',dirname(__DIR__));

$controllerName = isset($_GET['controller'])?ucfirst($_GET['controller']) . 'Controllers' : 'Customer';
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';
//file controller
$controllerPath = BASE_PATH . '/controllers/' . $controllerName . '.php';
if(file_exists($controllerPath)){
    include_once $controllerPath;
    $controller = new $controllerName();
    //panggil action
    if(method_exists($controller,$actionName)){
            $controller->$actionName();
    }else{
            die("Action not found.");
    }
}else{
    die("Controller not found.");
}
?>