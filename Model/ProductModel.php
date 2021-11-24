<?php

class ProductModel
{

    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=tp-web-2;charset=utf8', 'root', '');
    }

    function getProducts()
    {
        $sentencia = $this->db->prepare("select * from product");
        $sentencia->execute();
        $products = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function getProduct($id)
    {
        $sentencia = $this->db->prepare("select * from product WHERE id_product=?");
        $sentencia->execute(array($id));
        $product = $sentencia->fetch(PDO::FETCH_OBJ);
        return $product;
    }

    function getProductsWithCategory()
    {
        $sentencia = $this->db->prepare('select p.*, c.name as "category_name" from product p join category c on (p.id_category = c.id_category)');
        $sentencia->execute();
        $products = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function getFilteredProducts($minPrice, $maxPrice, $keyword)
    {
        unset($queryParams);
        if (!empty($keyword)) {
            $queryParams[] = " name LIKE :keyword ";
        }


        if (!empty($minPrice)) {
            $queryParams[] = " price >= :minPrice ";
        }

        if (!empty($maxPrice)) {
            $queryParams[] = " price <= :maxPrice ";
        }


        $query = "SELECT * FROM product";

        if (!empty($queryParams)) {
            $query .= ' WHERE ' . implode(' AND ', $queryParams);
        }

        $sentencia = $this->db->prepare($query);

        if (!empty($keyword)) {
            $formattedKeyword = '%' . $keyword . '%';
            $sentencia->bindParam(":keyword", $formattedKeyword, PDO::PARAM_STR, 10);
        }
        if (!empty($minPrice)) {
            $sentencia->bindParam(":minPrice", $minPrice, PDO::PARAM_INT);
        }
        if (!empty($maxPrice)) {
            $sentencia->bindParam(":maxPrice", $maxPrice, PDO::PARAM_INT);
        }
        
        $sentencia->execute();
        $products = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function addProduct($name, $description, $price, $categoryId, $imagePath)
    {
        if (isset($imagePath) && !empty($imagePath)) {
            $newImgPath = $this->uploadImage($imagePath);
            $sentencia = $this->db->prepare("INSERT INTO product(name, description, price,id_category, image_path) VALUES(?, ?, ?, ?, ?)");
            $sentencia->bindParam(1, $name, PDO::PARAM_STR, 50);
            $sentencia->bindParam(2, $description, PDO::PARAM_STR, 50);
            $sentencia->bindParam(3, $price, PDO::PARAM_INT);
            $sentencia->bindParam(4, $categoryId, PDO::PARAM_INT);
            $sentencia->bindParam(5, $newImgPath, PDO::PARAM_STR, 150);
            $sentencia->execute();
        } else {
            $sentencia = $this->db->prepare("INSERT INTO product(name, description, price,id_category, image_path) VALUES(?, ?, ?, ?, '')");
            $sentencia->bindParam(1, $name, PDO::PARAM_STR, 50);
            $sentencia->bindParam(2, $description, PDO::PARAM_STR, 50);
            $sentencia->bindParam(3, $price, PDO::PARAM_INT);
            $sentencia->bindParam(4, $categoryId, PDO::PARAM_INT);
            $sentencia->execute();
        }
    }

    function deleteProductFromDB($id)
    {
        $sentencia = $this->db->prepare("DELETE FROM product WHERE id_product=?");
        $sentencia->bindParam(1, $id, PDO::PARAM_INT);
        $sentencia->execute();
    }

    function updateProductFromDB($id, $name, $description, $price, $imagePath)
    {
        if (isset($name) && !empty($name)) {
            $sentencia = $this->db->prepare("UPDATE product SET name=? WHERE id_product=?");
            $sentencia->bindParam(1, $name, PDO::PARAM_STR, 50);
            $sentencia->bindParam(2, $id, PDO::PARAM_INT);
            $sentencia->execute();
        }
        if (isset($description) && !empty($description)) {
            $sentencia = $this->db->prepare("UPDATE product SET description=? WHERE id_product=?");
            $sentencia->bindParam(1, $description, PDO::PARAM_STR, 50);
            $sentencia->bindParam(2, $id, PDO::PARAM_INT);
            $sentencia->execute();
        }
        if (isset($price) && !empty($price)) {
            $sentencia = $this->db->prepare("UPDATE product SET price=? WHERE id_product=?");
            $sentencia->bindParam(1, $price, PDO::PARAM_INT);
            $sentencia->bindParam(2, $id, PDO::PARAM_INT);
            $sentencia->execute();
        }
        if (isset($imagePath) && !empty($imagePath)) {
            $newImgPath = $this->uploadImage($imagePath);
            $sentencia = $this->db->prepare("UPDATE product SET image_path=? WHERE id_product=?");
            $sentencia->bindParam(1, $newImgPath, PDO::PARAM_STR, 150);
            $sentencia->bindParam(2, $id, PDO::PARAM_INT);
            $sentencia->execute();
        }
    }

    function uploadImage($image)
    {
        $target = './assets/uploadedProductImgs/' . uniqid() . '.jpg';
        move_uploaded_file($image, $target);
        return $target;
    }
}
