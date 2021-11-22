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
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (!isset($_SESSION["email"])) {
            return false;
        }
        return true;
    }
    function getRole()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION["role"])) {
            return $_SESSION["role"];
        }
        return 3;
    }
    function getUser()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION["email"])) {
            return $_SESSION["email"];
        }
        return null;
    }
    function checkIfUserIsAdmin()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (isset($_SESSION["role"]) && $_SESSION["role"] === "1") {
            return true;
        }
        return false;
    }
}
