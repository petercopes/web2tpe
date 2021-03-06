<?php

class CategoryModel
{

    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=tp-web-2;charset=utf8', 'root', '');
    }

    function getCategories()
    {
        $sentencia = $this->db->prepare("select * from category");
        $sentencia->execute();
        $categories = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }

    function addCategory($name, $description)
    {
        $sentencia = $this->db->prepare("INSERT INTO category(name, description) VALUES(?, ?)");
        $sentencia->bindParam(1, $name, PDO::PARAM_STR, 50);
        $sentencia->bindParam(2, $description, PDO::PARAM_STR, 50);
        $sentencia->execute();
    }

    function deleteCategory($id)
    {
        $sentencia = $this->db->prepare("DELETE FROM category WHERE id_category=?");
        $sentencia->bindParam(1, $id, PDO::PARAM_INT);
        $sentencia->execute();
    }

    function getCategoryProducts($id)
    {
        $sentencia = $this->db->prepare("select * from product WHERE id_category=?");
        $sentencia->bindParam(1, $id, PDO::PARAM_INT);
        $sentencia->execute();
        $products = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function getCategory($id)
    {
        $sentencia = $this->db->prepare("SELECT * FROM category WHERE id_category=?");
        $sentencia->bindParam(1, $id, PDO::PARAM_INT);
        $sentencia->execute();
        $category = $sentencia->fetch(PDO::FETCH_OBJ);
        return $category;
    }

    function editCategory($id, $name, $description)
    {
        $sentencia = $this->db->prepare("UPDATE category SET name=?, description=? WHERE id_category=?");
        $sentencia->bindParam(1, $name, PDO::PARAM_STR, 50);
        $sentencia->bindParam(2, $description, PDO::PARAM_STR, 50);
        $sentencia->bindParam(3, $id, PDO::PARAM_INT);
        $sentencia->execute();
    }
}
