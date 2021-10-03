<?php

class AuthHelper
{

    function __construct()
    {
    }

    function redirect($path)
    {
        header("Location: " . BASE_URL . $path);
    }

    function checkIfUserIsLogged()
    {
        session_start();
        if (!isset($_SESSION["email"])) {
            return false;
        }
        return true;
    }
}
