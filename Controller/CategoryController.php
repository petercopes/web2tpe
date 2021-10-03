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
        $isUserLogged = $this->authHelper->returnIfUserLogged();
        $categories = $this->categoryModel->getCategories();
        $this->categoryView->showCategories($categories, $isUserLogged);
    }

    function showAddCategoryForm(){
        $isUserLogged = $this->authHelper->returnIfUserLogged();
        if(!$isUserLogged) {
            $this->authHelper->redirect('login');
        }
        $this->categoryView->showAddCategoryForm();
    }

    function addCategory() { 
        $this->categoryModel->addCategory($_POST['name'], $_POST['description']);
        $this->showCategories();
    }

    function deleteCategory($id) {
        $isUserLogged = $this->authHelper->returnIfUserLogged();
        if($isUserLogged) {
            $this->categoryModel->deleteCategory($id);
            $this->showCategories();
        }
    }

    function showEditCategoryForm($id) {
        $isUserLogged = $this->authHelper->returnIfUserLogged();
        if(!$isUserLogged) {
            $this->authHelper->redirect('login');
        }
        $category = $this->categoryModel->getCategory($id);
        $this->categoryView->showEditCategoryForm($category);
    }

    function editCategory($id) {
        $this->categoryModel->editCategory($id, $_POST['name'], $_POST['description']);
        $this->showCategories();
    }
}
