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

    function getProduct($id){
        $sentencia = $this->db->prepare( "select * from product WHERE id_product=?");
        $sentencia->execute(array($id));
        $product = $sentencia->fetch(PDO::FETCH_OBJ);
        return $product;
    }

    function getProductsWithCategory(){
        $sentencia = $this->db->prepare( 'select p.*, c.name as "category_name" from product p join category c on (p.id_category = c.id_category)');
        $sentencia->execute();
        $products = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }
    function getFilteredProducts($minPrice,$maxPrice,$keyword){
        $sentencia = $this->db->prepare("SELECT *  
        FROM product  
        WHERE  
            (@City IS NULL OR City = @City)
        AND 
            (@Gender IS NULL OR Gender = @Gender)
        AND 
            (@Age IS NULL OR Age = @Age) ")
    }
    function addProduct($name, $description, $price,$categoryId){
        $sentencia = $this->db->prepare("INSERT INTO product(name, description, price,id_category) VALUES(?, ?, ?, ?)");
        $sentencia->execute(array($name,$description,$price, $categoryId));
    }
    function deleteProductFromDB($id){
        $sentencia = $this->db->prepare("DELETE FROM product WHERE id_product=?");
        $sentencia->execute(array($id));
    }

    function updateProductFromDB($id,$name,$description,$price){
        if((isset($name)&&(!empty($name)))){
            $sentencia = $this->db->prepare("UPDATE product SET name=? WHERE id_product=?");
            $sentencia->execute(array($name,$id));
        }
        if((isset($description)&&(!empty($description)))){
            $sentencia = $this->db->prepare("UPDATE product SET description=? WHERE id_product=?");
            $sentencia->execute(array($description,$id));
        }
        if((isset($price)&&(!empty($price)))){
            $sentencia = $this->db->prepare("UPDATE product SET price=? WHERE id_product=?");
            $sentencia->execute(array($price,$id));
        }
    }
}