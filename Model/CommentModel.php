<?php

class CommentModel
{

    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=tp-web-2;charset=utf8', 'root', '');
    }

    function getCommentsFromDB()
    {
        $sentencia = $this->db->prepare("select * from comment");
        $sentencia->execute();
        $comments = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comments;
    }
    function getCommentsFromDBFilteredAndSorted($rating,$sorter,$order){
        if(isset($rating)){
            if(isset($sorter)&&isset($order)){
                if($sorter=="rating"){
                    if($order=="desc"){
                        $sentencia = $this->db->prepare("select * from comment where rating = ? ORDER BY rating DESC");
                    }
                    else{
                        $sentencia = $this->db->prepare("select * from comment where rating = :rating ORDER BY rating ASC");
                    }
                }
                else if($sorter=="id_comment"){
                    if($order=="desc"){
                        $sentencia = $this->db->prepare("select * from comment where rating = :rating ORDER BY id_comment DESC");
                    }
                    else{
                        $sentencia = $this->db->prepare("select * from comment where rating = :rating ORDER BY id_comment ASC");
                    }
                }
            }
            else{
                $sentencia = $this->db->prepare("select * from comment where rating = :rating");
            }
            $sentencia->bindParam(':rating', $rating, PDO::PARAM_STR);
            $sentencia->execute();
        }
        else{
            $sentencia = $this->db->prepare("select * from comment");
            $sentencia->execute();
        }
        $comments = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comments;

    }
    function getCommentsFromDBFilteredByRating($rating)
    {
        $sentencia = $this->db->prepare("select * from comment where rating = :rating");
        $sentencia->bindParam(':rating', $rating, PDO::PARAM_STR);
        $sentencia->execute();
        $comments = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comments;
    }
    function getCommentsFromDBSorted($attribute,$order){
        if($attribute=="rating"){
            if($order=="desc"){
                $sentencia = $this->db->prepare("select * from comment ORDER BY rating DESC");
            }
            else{
                $sentencia = $this->db->prepare("select * from comment ORDER BY rating ASC");
            }
        }
        else{
            if($order=="desc"){
                $sentencia = $this->db->prepare("select * from comment ORDER BY id_comment DESC");
            }
            else{
                $sentencia = $this->db->prepare("select * from comment ORDER BY id_comment ASC");
            }
        }  
        $sentencia->execute();
        $comments = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comments;
    }
    function addCommentToDB($email, $message, $rating, $productId)
    {
        $sentencia = $this->db->prepare("INSERT INTO comment(email, message,rating,id_product) VALUES(?,?,?,?)");
        $sentencia->execute(array($email, $message, $rating, $productId));
        $id = $this->db->lastInsertId();
        return $id;
    }

    function deleteCommentFromDB($id)
    {
        $sentencia = $this->db->prepare("DELETE FROM comment WHERE id_comment=?");
        $sentencia->execute(array($id));
    }

    function getCommentFromDB($id)
    {
        $sentencia = $this->db->prepare("SELECT * FROM comment WHERE id_comment=?");
        $sentencia->execute(array($id));
        $comment = $sentencia->fetch(PDO::FETCH_OBJ);
        return $comment;
    }
}
