<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class UserView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showLoginForm($showAlert = false, $alertMessage = "", $result = "")
    {
        $this->smarty->assign('tituloPagina', 'Log In');
        $this->smarty->assign('base', BASE_URL);
        $this->smarty->assign('showAlert', $showAlert);
        $this->smarty->assign('alertMessage', $alertMessage);
        $this->smarty->assign('result', $result);
        $this->smarty->assign('titulo', 'Log In');
        $this->smarty->assign('action', 'log-in');
        $this->smarty->assign('isUserLogged', false);
        $this->smarty->display('templates/authForm.tpl');
    }

    function showCreateUserForm($showAlert = false, $alertMessage = "", $result = "")
    {
        $this->smarty->assign('tituloPagina', 'Crear Usuario');
        $this->smarty->assign('base', BASE_URL);
        $this->smarty->assign('showAlert', $showAlert);
        $this->smarty->assign('alertMessage', $alertMessage);
        $this->smarty->assign('result', $result);
        $this->smarty->assign('action', 'create-user');
        $this->smarty->assign('titulo', 'Crear Usuario');
        $this->smarty->assign('isUserLogged', false);
        $this->smarty->display('templates/authForm.tpl');
    }

    function showHome($userRole, $showAlert = false, $alertMessage = "", $result = "")
    {
        $this->smarty->assign('tituloPagina', 'Home');
        $this->smarty->assign('base', BASE_URL);
        $this->smarty->assign('showAlert', $showAlert);
        $this->smarty->assign('alertMessage', $alertMessage);
        $this->smarty->assign('result', $result);
        $this->smarty->assign('userRole', $userRole);
        $this->smarty->display(('templates/home.tpl'));
    }

    function showBackoffice($users, $userRole)
    {
        $this->smarty->assign('tituloPagina', 'Backoffice');
        $this->smarty->assign('base', BASE_URL);
        $this->smarty->assign('users', $users);
        $this->smarty->assign('userRole', $userRole);
        $this->smarty->assign(
            'roleOptions',
            array(
                1 => 'Admin',
                2 => 'User'
            )
        );
        $this->smarty->display(('templates/userList.tpl'));
    }
}
