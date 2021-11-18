<?php
require_once "./Controller/CategoryController.php";
require_once "./Controller/ProductController.php";
require_once "./Controller/UserController.php";

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define('BASE_API_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/api/');

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
    case 'home':
        $userController->showHome();
        break;
    case "login":
        $userController->showLoginForm();
        break;
    case 'logout':
        $userController->logout();
        break;
    case 'create-user':
        $userController->showCreateUserForm();
        break;
        /* case 'create-user':
        $userController->createUser();
        break; */
    case 'verify-user':
        $userController->verifyLogin();
        break;
    case "products":
        $productController->showProducts();
        break;
    case "categories":
        $categoryController->showCategories();
        break;
    case "category":
        $categoryController->showCategory($params[1]);
        break;
    case "product":
        $productController->showProduct($params[1]);
        break;
    case "add-category":
        $categoryController->showAddCategoryForm();
        break;
    case "users":
        $userController->showUsersTab();
        break;
    case "remove-user":
        $userController->removeUser($params[1]);
        break;
        /* case "add-category":
        $categoryController->addCategory();
        break; */
        /* case "remove-category":
        $categoryController->deleteCategory($params[1]);
        break; */
    case "edit-category":
        $categoryController->showEditCategoryForm($params[1]);
        break;
        /* case "edit-category":
        $categoryController->editCategory($params[1]);
        break; */
    case "add-product":
        $productController->showAddProduct();
        break;
        /* case "remove-product":
        $productController->removeProduct($params[1]);
        break;
    case "add-product":
        $productController->createProduct();
        break; */
    case "edit-product":
        $productController->showEditProductForm($params[1]);
        break;
        /*  case "edit-product":
        $productController->editProduct($params[1]);
        break; */
    default:
        echo 'not found';
        break;
}
