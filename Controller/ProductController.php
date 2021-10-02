<?php
require_once "./Model/ProductModel.php";
require_once "./View/ProductView.php";

class ProductController{
    private $productModel;
    private $productView;
    private $categoryModel;

    function __construct(){
        $this->productModel = new ProductModel();
        $this->productView = new ProductView();
        $this->categoryModel = new CategoryModel();
    }

    function showProducts(){
        $products = $this->productModel->getProducts();
        $this->productView->showProducts($products);
    }

    function showAddProduct(){
        $categoriesAvailable = $this->categoryModel->getCategories();
        $this->productView->showAddProductForm($categoriesAvailable);
    }
    function createProduct(){
        $this->productModel->addProduct($_POST['name'], $_POST['description'], $_POST['price'], $_POST['categoryId']);
        $this->showProducts();
    }
    function removeProduct($id){
        $this->productModel->deleteProductFromDB($id);
        $this->showProducts();
    }
    function showEditProductForm($id){
        $product = $this->productModel->getProduct($id);
        $this->productView->showEditProductForm($product);
       
    }
    function editProduct($id){
        $this->productModel->updateProductFromDB($id,$_POST['name'], $_POST['description'], $_POST['price']);
        $this->showProducts();
    }
}