<?php
require_once "./Model/UserModel.php";
require_once "./View/UserView.php";

class UserController{
    private $userModel;
    private $userView;

    function __construct(){
        $this->userModel = new UserModel();
        $this->userView = new UserView();
    }

    function showLogin(){
        $this->userView->showLogin();
    }

    function showAdminActions(){
        $this->userView->showAdminActions();
    }
}
