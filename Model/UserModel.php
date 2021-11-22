<?php

class UserModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=tp-web-2;charset=utf8', 'root', '');
    }

    function createUser($email, $password){
        $sentencia = $this->db->prepare("INSERT INTO user(email, password) VALUES(?, ?)");
        $sentencia->execute(array($email,$password));
    }

    function getUser($email){
        $sentencia = $this->db->prepare('SELECT * FROM user WHERE email = ?');
        $sentencia->execute([$email]);
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function editRoleOnDB($id, $role)
    {
        $sentencia = $this->db->prepare('UPDATE table_name SET column1 = value1 WHERE id=?');
    }
}
