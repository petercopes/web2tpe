<?php
require_once "./Model/ProductModel.php";
require_once "./View/ProductView.php";

class ProductController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new ProductModel();
        $this->view = new ProductView();
    }

    function showHome(){
        $products = $this->model->getProducts();
        $this->view->showProducts($products);
    }
}
