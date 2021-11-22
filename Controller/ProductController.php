<?php
require_once "./Model/ProductModel.php";
require_once "./View/ProductView.php";
require_once "./Helper/AuthHelper.php";

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
        $userRole = $this->authHelper->getRole();
        $products = $this->productModel->getProductsWithCategory();
        $this->productView->showProducts($products, $userRole);
    }

    function showAddProduct()
    {
        $userRole = $this->authHelper->getRole();
        if ($userRole !== "1") {
            $this->authHelper->redirect('login');
        }
        $categoriesAvailable = $this->categoryModel->getCategories();
        $this->productView->showAddProductForm($categoriesAvailable, $userRole);
    }
    function createProduct()
    {
        $this->productModel->addProduct($_POST['name'], $_POST['description'], $_POST['price'], $_POST['categoryId']);
        $this->authHelper->redirect('products');
    }
    function removeProduct($id)
    {
        $userRole = $this->authHelper->getRole();
        if ($userRole === "1") {
            $this->productModel->deleteProductFromDB($id);
            $this->authHelper->redirect('products');
        }
    }
    function showEditProductForm($id)
    {
        $userRole = $this->authHelper->getRole();
        if ($userRole !== "1") {
            $this->authHelper->redirect('login');
        }
        $product = $this->productModel->getProduct($id);
        $this->productView->showEditProductForm($product, $userRole);
    }
    function editProduct($id)
    {
        $this->productModel->updateProductFromDB($id, $_POST['name'], $_POST['description'], $_POST['price']);
        $this->authHelper->redirect('products');
    }
    function showProduct($id)
    {
        $userRole = $this->authHelper->getRole();
        $product = $this->productModel->getProduct($id);
        $this->productView->showProduct($product, $userRole);
    }
}
