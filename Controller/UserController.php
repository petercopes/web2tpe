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

    function showAdminActions(){
        $this->userView->showAdminActions();
    }

    function showLoginForm(){
        $this->userView->showLoginForm();
    }

    function showCreateUserForm(){
        $this->userView->showCreateUserForm();
    }

    function logout(){
        session_start();
        session_destroy();
        $this->userView->showLoginForm("Te deslogueaste!");
    }

    function verifyLogin(){
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
     
            // Obtengo el usuario de la base de datos
            $user = $this->userModel->getUser($email);
     
            // Si el usuario existe y las contraseñas coinciden
            if ($user && password_verify($password, $user->password)) {

                session_start();
                $_SESSION["email"] = $email;
                
                $this->userView->showAdminActions();
            } else {
                $this->userView->showLoginForm("Acceso denegado");
            }
        }
    }

    function createUser(){
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $hashedPassword=password_hash($password, PASSWORD_BCRYPT);
            $this->userModel->createUser($email, $hashedPassword);
            $this->userView->showLoginForm("Usuario creado con éxito");
        } else {
            $this->userView->showLoginForm("Por favor complete los campos");
        }
    }

}

