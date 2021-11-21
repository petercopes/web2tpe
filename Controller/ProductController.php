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
        $categoriesAvailable = $this->categoryModel->getCategories();
        $this->productView->showAddProductForm($categoriesAvailable);
    }
    function createProduct()
    {
        $this->productModel->addProduct($_POST['name'], $_POST['description'], $_POST['price'], $_POST['categoryId']);
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
        $product = $this->productModel->getProduct($id);
        $this->productView->showEditProductForm($product);
    }
    function editProduct($id)
    {
        $this->productModel->updateProductFromDB($id, $_POST['name'], $_POST['description'], $_POST['price']);
        $this->authHelper->redirect('products');
    }
    function showProduct($id){
        $isUserLogged = $this->authHelper->checkIfUserIsLogged();
        $product= $this->productModel->getProduct($id);
        $this->productView->showProduct($product, $isUserLogged);
    }
}
