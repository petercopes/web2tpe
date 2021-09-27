<?php
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
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
    case "showAddCategory":
        $controller->showAddCategoryForm();
    break;
    case "addCategory":
        $controller->addCategory();
    break;
    case "deleteCategory":
        $controller->deleteCategory($params[1]);
    break;
    case "editCategoryForm":
        $controller->showEditCategoryForm($params[1]);
    break;
    case "editCategory":
        $controller->editCategory($params[1]);
    break;
    case "product-add-form":
        $controller->showAddProduct();
    break;
    case "remove-product":
        $controller->removeProduct($params[1]);
    break;
    case "add-product":
        $controller->createProduct();
    break;
    case "edit-product-form":
        $controller->showEditProductForm($params[1]);
    break;
    case "edit-product":
        $controller->editProduct($params[1]);
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
