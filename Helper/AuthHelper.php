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

    function checkIfUserIsAdmin()
    {
        session_start();
        if (isset($_SESSION["role"]) && $_SESSION["role"] === "1") {
            return true;
        } 
        return false;
    }
}
