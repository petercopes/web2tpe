<?php
require_once "./Model/ProductModel.php";
require_once './Model/CategoryModel.php';
require_once "./View/ProductView.php";
require_once "./View/CategoryView.php";

class Controller{
    private $categoryModel;
    private $productModel;
    private $productView;
    private $categoryView;

    function __construct(){
        $this->categoryModel = new CategoryModel();
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

    function showAddCategoryForm(){
        $this->categoryView->showAddCategoryForm();
    }

    function addCategory() {
        $this->categoryModel->addCategory($_POST['name'], $_POST['description']);
        $this->showCategories();
    }

    function deleteCategory($id) {
        $this->categoryModel->deleteCategory($id);
        $this->showCategories();
    }

    function showEditCategoryForm($id) {
        $category = $this->categoryModel->getCategory($id);
        $this->categoryView->showEditCategoryForm($category);
    }

    function editCategory($id) {
        var_dump($id);
        $this->categoryModel->editCategory($id, $_POST['name'], $_POST['description']);
        $this->showCategories();
    }
}
