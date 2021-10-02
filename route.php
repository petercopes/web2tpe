<?php
require_once "./Controller/CategoryController.php";
require_once "./Controller/ProductController.php";
require_once "./Controller/UserController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (!empty($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$categoryController = new CategoryController();
$productController = new ProductController();
$userController = new UserController();

switch ($params[0]) {
    case "login":
        $userController->showLogin();
    break;
    case "admin-actions":
        $userController->showAdminActions();
    break;
    case "products":
        $productController->showProducts();
    break;
    case "categories":
        $categoryController->showCategories();
    break;
    case "category-add-form":
        $categoryController->showAddCategoryForm();
    break;
    case "add-category":
        $categoryController->addCategory();
    break;
    case "remove-category":
        $categoryController->deleteCategory($params[1]);
    break;
    case "edit-category-form":
        $categoryController->showEditCategoryForm($params[1]);
    break;
    case "edit-category":
        $categoryController->editCategory($params[1]);
    break;
    case "product-add-form":
        $productController->showAddProduct();
    break;
    case "remove-product":
        $productController->removeProduct($params[1]);
    break;
    case "add-product":
        $productController->createProduct();
    break;
    case "edit-product-form":
        $productController->showEditProductForm($params[1]);
    break;
    case "edit-product":
        $productController->editProduct($params[1]);
    break;
    default:
        echo ('not found');
    break;
}
