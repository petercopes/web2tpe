<?php

require_once "./Controller/Controller.php";
if (!empty($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$controller = new Controller();

switch ($params[0]) {
    case "products":
        $controller->showProducts();
    break;
    case "categories":
        $controller->showCategories();
    break;
    // case "products":
    //     showProducts();
    //     break;
    // case "categories":
    //     showCategories();
    //     break;
    default:
        echo ('not found');
        break;
}
