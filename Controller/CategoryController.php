<?php
require_once './Model/CategoryModel.php';
require_once "./View/CategoryView.php";
require_once "./Helper/AuthHelper.php";


class CategoryController
{
    private $categoryModel;
    private $categoryView;
    private $authHelper;

    function __construct()
    {
        $this->categoryModel = new CategoryModel();
        $this->categoryView = new CategoryView();
        $this->authHelper = new AuthHelper();
    }

    function showCategories()
    {
        $isUserLogged = $this->authHelper->checkIfUserIsLogged();
        $categories = $this->categoryModel->getCategoriesFromDB();
        $this->categoryView->showCategories($categories, $isUserLogged);
    }

    function showAddCategoryForm()
    {
        $isUserLogged = $this->authHelper->checkIfUserIsLogged();
        if (!$isUserLogged) {
            $this->authHelper->redirect('login');
        }
        $this->categoryView->showAddCategoryForm();
    }

    function addCategory()
    {
        $this->categoryModel->addCategoryToDB($_POST['name'], $_POST['description']);
        $this->authHelper->redirect('categories');
    }

    function deleteCategory($id)
    {
        $isUserLogged = $this->authHelper->checkIfUserIsLogged();
        if ($isUserLogged) {
            $this->categoryModel->deleteCategoryFromDB($id);
            $this->authHelper->redirect('categories');
        }
    }

    function showEditCategoryForm($id)
    {
        $isUserLogged = $this->authHelper->checkIfUserIsLogged();
        if (!$isUserLogged) {
            $this->authHelper->redirect('login');
        }
        $category = $this->categoryModel->getCategoryFromDB($id);
        $this->categoryView->showEditCategoryForm($category);
    }

    function editCategory($id)
    {
        $this->categoryModel->editCategoryOnDB($id, $_POST['name'], $_POST['description']);
        $this->authHelper->redirect('categories');
    }
    function showCategory($id)
    {
        $isUserLogged = $this->authHelper->checkIfUserIsLogged();
        $category = $this->categoryModel->getCategoryFromDB($id);
        $products = $this->categoryModel->getCategoryProducts($id);
        $this->categoryView->showCategory($category, $products, $isUserLogged);
    }
}
