<?php
// on cherche si $_GET possede la cle controller
if(!empty($_GET['controller']))
{
    // assigner la valeur de la cle controller dans la variable $controller
    $controller = $_GET['controller'];
}
else
{
    // sinon assigner à la cle controller la valeur home
    $controller = 'home';
}

if(file_exists('../controller/'.$controller.'-controller.php'))
{
    include_once '../controller/'.$controller.'-controller.php';
}
// add erreur

if (!empty($_GET['action']))
{
    // assigner la valeur de la cle controller dans la variable $controller
    $action = $_GET['action'];
}
else
{
    // sinon assigner à la cle controller la valeur home
    $action = 'index';
}

if (function_exists($action))
{
    $action();
}
else
{
    include_once '../controller/error-controller.php';
    error404();
}
