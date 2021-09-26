<?php

class CategoriesModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=tp-web-2;charset=utf8', 'root', '');
    }

    function getCategories(){
        $sentencia = $this->db->prepare( "select * from category");
        $sentencia->execute();
        $categories = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    } 
}