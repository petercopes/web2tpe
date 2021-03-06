<?php
require_once "./Model/UserModel.php";
require_once "./View/UserView.php";

class UserController
{
    private $userModel;
    private $userView;
    private $authHelper;

    function __construct()
    {
        $this->userModel = new UserModel();
        $this->userView = new UserView();
        $this->authHelper = new AuthHelper();
    }

    function showLoginForm()
    {
        $this->userView->showLoginForm();
    }

    function showCreateUserForm()
    {
        $this->userView->showCreateUserForm();
    }

    function logout()
    {
        session_start();
        session_destroy();
        $this->authHelper->redirect('home');
        //$this->userView->showHome(false, true, "Te deslogueaste!", "success");
    }

    function verifyLogin()
    {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Obtengo el usuario de la base de datos
            $user = $this->userModel->getUser($email);

            // Si el usuario existe y las contraseñas coinciden
            if ($user && password_verify($password, $user->password)) {

                session_start();
                $_SESSION["email"] = $email;
                $_SESSION["role"] = $user->id_role;

                $this->authHelper->redirect('home');
                //$this->userView->showHome(true, true, "Iniciaste sesión!", "success");
            } else {
                $this->userView->showLoginForm(true, "Acceso denegado!", "failure");
            }
        }
    }

    function createUser()
    {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $this->userModel->createUser($email, $hashedPassword);

            session_start();
            $_SESSION["email"] = $email;
            $_SESSION["role"] = 2;

            $this->authHelper->redirect('home');
            //$this->userView->showHome(false, true, "Usuario creado con éxito!", "success");
        } else {
            $this->userView->showLoginForm(true, "Por favor complete los campos requeridos", "failure");
        }
    }

    function deleteUser($email)
    {
        if (!empty($email)) {
            $this->userModel->deleteUser($email);

            $this->authHelper->redirect('backoffice');
        }
    }

    function editUserRole($email)
    {
        if (!empty($email) && !empty($_POST['role'])) {
            $this->userModel->editUserRole($email, $_POST['role']);
            $this->authHelper->redirect('backoffice');
        }
    }

    function showHome()
    {
        $userRole = $this->authHelper->getRole();
        $this->userView->showHome($userRole);
    }

    function showBackoffice()
    {
        $userRole = $this->authHelper->getRole();
        $users = $this->userModel->getUsers();
        $this->userView->showBackoffice($users, $userRole);
    }
}
