<?php

class LoginView
{

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

}
