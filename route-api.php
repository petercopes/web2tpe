<?php
require_once 'libs/Router.php';
require_once 'Controller/ApiCommentController.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('comments', 'GET', 'ApiCommentController', 'getComments');
$router->addRoute('comments/:ID', 'GET', 'ApiCommentController', 'getComment');
$router->addRoute('comments/:ID', 'DELETE', 'ApiCommentController', 'deleteComment');
$router->addRoute('comments', 'POST', 'ApiCommentController', 'addComment');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
