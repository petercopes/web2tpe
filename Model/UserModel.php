<?php

class UserModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=tp-web-2;charset=utf8', 'root', '');
    }
}
