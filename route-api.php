<?php

require_once 'libs/Router.php';
require_once 'Controller/ApiTaskController.php';
require_once 'Controller/ApiUserController.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('categorias', 'GET', 'ApiCategoryController', 'obtenerCategorias');
$router->addRoute('categorias/:ID', 'GET', 'ApiCategoryController', 'obtenerCategoria');
$router->addRoute('categorias/:ID', 'DELETE', 'ApiCategoryController', 'eliminarCategoria');
$router->addRoute('categorias', 'POST', 'ApiCategoryController', 'insertarCategoria');
$router->addRoute('categorias/:ID', 'PUT', 'ApiCategoryController', 'actualizarCategoria');

$router->addRoute('productos', 'GET', 'ApiProductController', 'obtenerProductos');
$router->addRoute('productos/:ID', 'GET', 'ApiProductController', 'obtenerProducts');
$router->addRoute('productos/:ID', 'DELETE', 'ApiProductController', 'eliminarProducto');
$router->addRoute('productos', 'POST', 'ApiProductController', 'insertarProducto');
$router->addRoute('productos/:ID', 'PUT', 'ApiProductController', 'actualizarProducto');


$router->addRoute('users/token', 'GET', 'ApiUserController', 'obtenerToken');
$router->addRoute('users/:ID', 'GET', 'ApiUserController', 'obtenerUsuario');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
