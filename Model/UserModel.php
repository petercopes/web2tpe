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
        $sentencia->execute(array($email, $password));
    }

    function getUser($email)
    {
        $sentencia = $this->db->prepare('SELECT * FROM user WHERE email = ?');
        $sentencia->execute([$email]);
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
    function getUserById($id)
    {
        $sentencia = $this->db->prepare('SELECT * FROM user WHERE id = ?');
        $sentencia->execute([$id]);
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
    function getUsersFromDB()
    {
        $sentencia = $this->db->prepare('SELECT * FROM user');
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    function removeUserFromDB($id)
    {
        $sentencia = $this->db->prepare('SELECT * FROM user WHERE id = ?');
        $sentencia->execute([$id]);
    }
}
