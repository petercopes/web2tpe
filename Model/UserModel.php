<?php

class UserModel
{

    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=tp-web-2;charset=utf8', 'root', '');
    }

    function createUser($email, $password)
    {
        $sentencia = $this->db->prepare("INSERT INTO user(email, password) VALUES(?, ?)");
        $sentencia->bindParam(1, $email, PDO::PARAM_STR, 50);
        $sentencia->bindParam(2, $password, PDO::PARAM_STR, 150);
        $sentencia->execute();
    }

    function getUser($email)
    {
        $sentencia = $this->db->prepare('SELECT * FROM user WHERE email = ?');
        $sentencia->bindParam(1, $email, PDO::PARAM_STR, 50);
        $sentencia->execute();
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function getUsers()
    {
        $sentencia = $this->db->prepare("SELECT * FROM user");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function deleteUser($email)
    {
        $sentencia = $this->db->prepare('DELETE FROM user WHERE email=?');
        $sentencia->bindParam(1, $email, PDO::PARAM_STR, 50);
        $sentencia->execute();
    }

    function editUserRole($email, $role)
    {
        $sentencia = $this->db->prepare("UPDATE user SET id_role=? WHERE email=?");
        $sentencia->bindParam(1, $role, PDO::PARAM_INT);
        $sentencia->bindParam(2, $email, PDO::PARAM_STR, 50);
        $sentencia->execute();
    }
}
