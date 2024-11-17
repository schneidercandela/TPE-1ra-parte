<?php

//importar archivos 
require_once 'app/controller/product.controller.php';
require_once 'app/controller/auth.controller.php';
require_once 'app/helpers/auth.helpers.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//redirigis al usuario 
//header('Location' . BASE_URL . 'home')

$action = 'home'; 

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}   

//localhost/home   -> Ver categorias
//localhost/login  -> Ver login

//separa la accion de las barras 
$params = explode('/', $action); 

$ProductController = new ProductController();
$AuthController = new AuthController();
$AuthHelper = new AuthHelper();

//categorias/                            :id         
//$CategoriesController->deleteCategory($params[1]);

switch ($params[0]) {
    case 'home':
       //$ProductController->showAllCategories();
       echo 'HOME';
       break;
    break;
    case 'login':
        $ProductController->showLogin();
    break;
    case 'logout':
        $AuthController->logout();
        break;
    case 'login':
        $AuthController->login();
        break;
    default: 
        echo "404 Page Not Found";
        break;
}
