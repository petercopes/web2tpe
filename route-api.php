<?php

require_once 'libs/Router.php';
require_once 'Controller/ApiTaskController.php';
require_once 'Controller/ApiUserController.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('categorias', 'GET', 'ApiCategoryController', 'obtenerTareas');
$router->addRoute('categorias/:ID', 'GET', 'ApiCategoryController', 'obtenerTarea');
$router->addRoute('categorias/:ID', 'DELETE', 'ApiCategoryController', 'eliminarTarea');
$router->addRoute('categorias', 'POST', 'ApiCategoryController', 'insertarTarea');
$router->addRoute('categorias/:ID', 'PUT', 'ApiCategoryController', 'actualizarTarea');

$router->addRoute('productos', 'GET', 'ApiProductController', 'obtenerTareas');
$router->addRoute('productos/:ID', 'GET', 'ApiProductController', 'obtenerTarea');
$router->addRoute('productos/:ID', 'DELETE', 'ApiProductController', 'eliminarTarea');
$router->addRoute('productos', 'POST', 'ApiProductController', 'insertarTarea');
$router->addRoute('productos/:ID', 'PUT', 'ApiProductController', 'actualizarTarea');


$router->addRoute('users/token', 'GET', 'ApiUserController', 'obtenerToken');
$router->addRoute('users/:ID', 'GET', 'ApiUserController', 'obtenerUsuario');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
