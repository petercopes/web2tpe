<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class UserView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showLoginForm($showAlert = false, $alertMessage = "", $result = "") {
        $this->smarty->assign('tituloPagina','Log In');
        $this->smarty->assign('base',BASE_URL);
        $this->smarty->assign('showAlert',$showAlert);    
        $this->smarty->assign('alertMessage',$alertMessage);    
        $this->smarty->assign('result',$result);        
        $this->smarty->assign('titulo', 'Log In');     
        $this->smarty->assign('action', 'log-in');    
        $this->smarty->assign('isUserLogged', false);    
        $this->smarty->display('templates/authForm.tpl'); 
    }

    function showCreateUserForm($message = "") {
        $this->smarty->assign('tituloPagina','Crear Usuario');
        $this->smarty->assign('base',BASE_URL);
        $this->smarty->assign('message', $message);      
        $this->smarty->assign('action', 'create-user');   
        $this->smarty->assign('titulo', 'Crear Usuario');    
        $this->smarty->assign('isUserLogged', false);         
        $this->smarty->display('templates/authForm.tpl'); 
    }
    
    function showHome($isUserLogged, $showAlert = false, $alertMessage = "", $result = ""){
        $this->smarty->assign('tituloPagina','Home');
        $this->smarty->assign('base',BASE_URL);
        $this->smarty->assign('showAlert',$showAlert);    
        $this->smarty->assign('alertMessage',$alertMessage);    
        $this->smarty->assign('result',$result);
        $this->smarty->assign('isUserLogged', $isUserLogged);        
        $this->smarty->display(('templates/home.tpl'));
    }
}
