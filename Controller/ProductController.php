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
        if (!isset($_GET['page'])) {
            $page = 1;
        } else {
            $page = $_GET['page'];
        }
        $resultsPerPage = 3;
        $pageCount = ceil(count($this->productModel->getProductsWithCategory(null, null)) / $resultsPerPage);
        $limit = ($page - 1) * $resultsPerPage;
        $productsForPage =  $this->productModel->getProductsWithCategory($limit, $resultsPerPage);

        $this->productView->showProducts($productsForPage, $userRole, '', '', '', $pageCount);
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

    function getFilteredProducts()
    {
        $userRole = $this->authHelper->getRole();

        if (isset($_POST['minPrice'])) {
            $minPrice = $_POST['minPrice'];
        } else if (isset($_GET['minPrice'])) {
            $minPrice = $_GET['minPrice'];
        } else {
            $minPrice = null;
        }

        if (isset($_POST['maxPrice'])) {
            $maxPrice = $_POST['maxPrice'];
        } else if (isset($_GET['maxPrice'])) {
            $maxPrice = $_GET['maxPrice'];
        } else {
            $maxPrice = null;
        }

        if (isset($_POST['keyword'])) {
            $keyword = $_POST['keyword'];
        } else if (isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
        } else {
            $keyword = null;
        }

        $keyword = explode(' ', $keyword)[0];
        if (!empty($minPrice)) {
            settype($minPrice, "integer");
        }
        if (!empty($maxPrice)) {
            settype($maxPrice, "integer");
        }
        $resultsPerPage = 3;
        $pageCount = ceil(count($this->productModel->getFilteredProducts($minPrice, $maxPrice, $keyword, null, null)) / $resultsPerPage);
        if (!isset($_GET['page'])) {
            $page = 1;
        } else {
            $page = $_GET['page'];
        }
        $limit = ($page - 1) * $resultsPerPage;
        $productsForPage = $this->productModel->getFilteredProducts($minPrice, $maxPrice, $keyword, $limit, $resultsPerPage);
        $this->productView->showProducts($productsForPage, $userRole, $minPrice, $maxPrice, $keyword, $pageCount);
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
        $this->productModel->updateProductFromDB($id, $_POST['name'], $_POST['description'], $_POST['price'], $_FILES['productImage']['tmp_name'], $_POST['delete-image']);
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
