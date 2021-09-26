<?php
require_once "categoriesList.php";
require_once "productsList.php";

if (!empty($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = 'products';
}

$params = explode('/', $action);

switch ($params[0]) {
    case "products":
        showProducts();
        break;
    case "categories":
        showCategories();
        break;
    default:
        echo ('not found');
        break;
}
