<?php
require_once "./Model/ProductModel.php";
require_once "./View/ProductView.php";
require_once "./Helpers/AuthHelper.php";

class ProductController
{
    private $productModel;
    private $productView;
    private $categoryModel;
    private $authHelper;

    function __construct()
    {
        $this->productModel = new ProductModel();
        $this->productView = new ProductView();
        $this->categoryModel = new CategoryModel();
        $this->authHelper = new AuthHelper();
    }

    function showProducts()
    {
        $isUserLogged = $this->authHelper->checkIfUserIsLogged();
        $products = $this->productModel->getProductsWithCategory();
        $this->productView->showProducts($products, $isUserLogged);
    }

    function showAddProduct()
    {
        $isUserLogged = $this->authHelper->checkIfUserIsLogged();
        if (!$isUserLogged) {
            $this->authHelper->redirect('login');
        }
        $categoriesAvailable = $this->categoryModel->getCategoriesFromDB();
        $this->productView->showAddProductForm($categoriesAvailable);
    }
    function createProduct()
    {
        if (isset($_FILES['productImage']) && ($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || $_FILES['input_name']['type'] == "image/png")) {
            $this->productModel->addProductWithImageToDB($_POST['name'], $_POST['description'], $_POST['price'], $_POST['categoryId'], $_FILES['productImage']['tmp_name']);
            $filePath = "productFiles/" . uniqid("", true) . "." . strtolower(pathinfo($_FILES['input_name']['name'], PATHINFO_EXTENSION));
            move_uploaded_file($_FILES['productImage']['tmp_name'], $filePath);
            $this->authHelper->redirect('products');
        }
        $this->productModel->addProductToDB($_POST['name'], $_POST['description'], $_POST['price'], $_POST['categoryId']);
        $this->authHelper->redirect('products');
    }
    function removeProduct($id)
    {
        $isUserLogged = $this->authHelper->checkIfUserIsLogged();
        if ($isUserLogged) {
            $this->productModel->deleteProductFromDB($id);
            $this->authHelper->redirect('products');
        }
    }
    function showEditProductForm($id)
    {
        $isUserLogged = $this->authHelper->checkIfUserIsLogged();
        if (!$isUserLogged) {
            $this->authHelper->redirect('login');
        }
        $product = $this->productModel->getProductFromDB($id);
        $this->productView->showEditProductForm($product);
    }
    function editProduct($id)
    {
        $this->productModel->updateProductOnDB($id, $_POST['name'], $_POST['description'], $_POST['price']);
        $this->authHelper->redirect('products');
    }
    function showProduct($id)
    {
        $isUserLogged = $this->authHelper->checkIfUserIsLogged();
        $product = $this->productModel->getProductFromDB($id);
        $this->productView->showProduct($product, $isUserLogged);
    }
}
