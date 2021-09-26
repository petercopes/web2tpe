<?php
// require_once "categoriesList.php";
// require_once "productsList.php";
// require_once "home.php";
require_once "Controller/ProductController.php";

if (!empty($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$productController = new ProductController();

switch ($params[0]) {
    case "home":
        $productController->showHome();
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
