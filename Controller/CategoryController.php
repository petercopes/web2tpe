<?php
require_once './Model/CategoryModel.php';
require_once "./View/CategoryView.php";
require_once "./Helper/AuthHelper.php";


class CategoryController{
    private $categoryModel;
    private $categoryView;    
    private $authHelper;

    function __construct(){
        $this->categoryModel = new CategoryModel();
        $this->categoryView = new CategoryView();
        $this->authHelper = new AuthHelper();
    }

    function showCategories(){
        $userRole = $this->authHelper->getRole();
        $categories = $this->categoryModel->getCategories();
        $this->categoryView->showCategories($categories, $userRole);
    }

    function showAddCategoryForm(){
        $userRole = $this->authHelper->getRole();
        if($userRole!=1) {
            $this->authHelper->redirect('login');
        }
        $this->categoryView->showAddCategoryForm($userRole);
    }

    function addCategory() { 
        $this->categoryModel->addCategory($_POST['name'], $_POST['description']);
        $this->authHelper->redirect('categories');
    }

    function deleteCategory($id) {
        $userRole = $this->authHelper->getRole();
        if($userRole==1) {
            try {
                $this->categoryModel->deleteCategory($id);
                $this->authHelper->redirect('categories');
            } catch(Exception $e) {
                $this->authHelper->redirect('categories');
            }
        }
    }

    function showEditCategoryForm($id) {
        $userRole = $this->authHelper->getRole();
        if($userRole!=1) {
            $this->authHelper->redirect('login');
        }
        $category = $this->categoryModel->getCategory($id);
        $this->categoryView->showEditCategoryForm($category, $userRole);
    }

    function editCategory($id) {
        $this->categoryModel->editCategory($id, $_POST['name'], $_POST['description']);
        $this->authHelper->redirect('categories');
    }
    
    function showCategory($id){
        $userRole = $this->authHelper->getRole();
        $category= $this->categoryModel->getCategory($id);
        $products = $this->categoryModel->getCategoryProducts($id);
        $this->categoryView->showCategory($category,$products, $userRole);
    }
}
