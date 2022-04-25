<?php

if (!empty($_GET['controller']))
{
    $controller = $_GET['controller'];
}
else
{
    $controller = 'home';
}

$controllerClassName = ucfirst($controller) . "Controller";

if (file_exists('../controller/' . $controllerClassName . '.php'))
{    
    include_once '../controller/' . $controllerClassName . '.php';
    $instance = new $controllerClassName();
}
else
{
    include_once '../controller/ErrorController.php';
    $instance = new ErrorController;
    $instance->error404();
}

if (!empty($_GET['action']))
{
    $action = $_GET['action'];
}
else
{
    $action = 'index';
}

if (method_exists($instance, $action))
{
    $instance->$action();
}
else
{
    include_once '../controller/ErrorController.php';
    $error404 = new ErrorController;
}