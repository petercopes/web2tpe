<?php
require_once "./Model/LoginModel.php";
require_once "./View/LoginView.php";

class LoginController{
    private $loginModel;
    private $loginView;

    function __construct(){
        $this->loginModel = new LoginModel();
        $this->loginView = new LoginView();
    }

    function showLogin(){
        $this->loginView->showLogin();
    }
}
