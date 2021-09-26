<?php

class ProductModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=tp-web-2;charset=utf8', 'root', '');
    }

    function getProducts(){
        $sentencia = $this->db->prepare( "select * from product");
        $sentencia->execute();
        $products = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $products;
    } 
}