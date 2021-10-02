<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class UserView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showLogin() {
        echo '
        <h2>Log in</h2>
        <form class="form-login" action="login" method="post">
            <input placeholder="usuario" type="text" name="user" id="user" required>
            <input placeholder="contraseña" type="text" name="password" id="password" required>
            <input type="submit" value="Log in">
        </form>
        ';
    }

    function showAdminActions() {
        $this->smarty->assign('tituloPagina','Administrador');
        $this->smarty->assign('base',BASE_URL);
        $this->smarty->display('templates/adminActions.tpl'); 
    }
}
