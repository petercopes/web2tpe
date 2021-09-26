<?php
require_once "./Model/ProductModel.php";
require_once './Model/CategoriesModel.php';
require_once "./View/ProductView.php";
require_once "./View/CategoryView.php";

class Controller{
    private $categoryModel;
    private $productModel;
    private $productView;
    private $categoryView;

    function __construct(){
        $this->categoryModel = new categoriesModel();
        $this->productModel = new ProductModel();
        $this->productView = new ProductView();
        $this->categoryView = new CategoryView();
    }
    function showProducts(){
        $products = $this->productModel->getProducts();
        $this->productView->showProducts($products);
    }
    function showCategories(){
        $categories = $this->categoryModel->getCategories();
        $this->categoryView->showCategories($categories);
    }
    function createProduct(){
        $categoriesAvailable = $this->categoryModel->getCategories();
        $this->productView->showAddProductForm($categoriesAvailable);
        var_dump($_POST);
        $this->productModel->addProduct($_POST['name'], $_POST['description'], $_POST['price'], $_POST['id']);
    }
}
