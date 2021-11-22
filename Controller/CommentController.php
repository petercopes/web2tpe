<?php
require_once './Model/CommentModel.php';
require_once "./View/CommentView.php";
require_once "./Helper/AuthHelper.php";


class CommentController
{
    private $commentModel;
    private $commentView;
    private $productModel;
    private $authHelper;

    function __construct()
    {
        $this->commentModel = new CommentModel();
        $this->productModel = new ProductModel();
        $this->categoryView = new CommentView();
        $this->authHelper = new AuthHelper();
    }

    function showComments($productID)
    {
        $userRole = $this->authHelper->getRole();
        $product = $this->productModel->getProduct($productID);
        $this->commentView->showComments($product, $userRole);
    }
}
