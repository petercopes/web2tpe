<?php
require_once "./Model/ProductModel.php";
require_once "./View/ProductView.php";
require_once "./Helper/AuthHelper.php";
require_once "./Model/CategoryModel.php";

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
        $this->productView->showProducts($products, $userRole, '', '', '');
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
        if (isset($_FILES['productImage']['tmp_name']) && !empty($_FILES['productImage']['tmp_name'])) {
            $this->productModel->addProduct($_POST['name'], $_POST['description'], $_POST['price'], $_POST['categoryId'], $_FILES['productImage']['tmp_name']);
        } else {
            $this->productModel->addProduct($_POST['name'], $_POST['description'], $_POST['price'], $_POST['categoryId'], '');
        }
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

    function getFilteredProducts(){
        $userRole = $this->authHelper->getRole();
        $minPrice = $_POST['minPrice'];
        $maxPrice = $_POST['maxPrice'];
        $keyword = $_POST['keyword'];
        $keyword = explode(' ', $keyword)[0];
        if(!empty($minPrice)) {
            settype($minPrice,"integer");
        }
        if(!empty($maxPrice)) {
            settype($maxPrice,"integer");
        }
        $products = $this->productModel->getFilteredProducts($minPrice, $maxPrice, $keyword);
        $this->productView->showProducts($products, $userRole, $minPrice, $maxPrice, $keyword);
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
        $this->productModel->updateProductFromDB($id, $_POST['name'], $_POST['description'], $_POST['price'], $_FILES['productImage']['tmp_name']);
        $this->authHelper->redirect('products');
    }

    function showProduct($id)
    {
        $userRole = $this->authHelper->getRole();
        $product = $this->productModel->getProduct($id);
        $user = $this->authHelper->getUser();
        if ($user) {
            $this->productView->showProduct($product, $userRole, $user);
        } else {
            $this->productView->showProduct($product, $userRole, '');
        }
    }
}
