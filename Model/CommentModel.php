<?php

class CommentModel
{

    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=tp-web-2;charset=utf8', 'root', '');
    }
    function getCommentsFromDB($rating,$sorter,$order){
        $query = "SELECT * FROM comment";
        if(isset($rating)) {
            $query .= " WHERE rating = :rating";
        }
        if(isset($sorter) && isset($order)) {
            if($sorter=='rating'){
                $query .= " ORDER BY rating";
            }
            else{
                $query .= " ORDER BY id_comment";
            }
            if($order=='asc'){
                $query .= " asc";
            }
            else{
                $query .= " desc";
            }
        }
        $sentencia = $this->db->prepare($query);
        if (isset($rating)) {
            $sentencia->bindParam(":rating", $rating, PDO::PARAM_INT);
        }
        $sentencia->execute();
        $comments = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comments;
    }
    
    function addCommentToDB($email, $message, $rating, $productId)
    {
        $sentencia = $this->db->prepare("INSERT INTO comment(email, message,rating,id_product) VALUES(?,?,?,?)");
        $sentencia->bindParam(1, $email, PDO::PARAM_STR, 50);
        $sentencia->bindParam(2, $message, PDO::PARAM_STR, 50);
        $sentencia->bindParam(3, $rating, PDO::PARAM_INT);
        $sentencia->bindParam(4, $productId, PDO::PARAM_INT);
        $sentencia->execute();
        $id = $this->db->lastInsertId();
        return $id;
    }

    function deleteCommentFromDB($id)
    {
        $sentencia = $this->db->prepare("DELETE FROM comment WHERE id_comment=?");
        $sentencia->bindParam(1, $id, PDO::PARAM_INT);
        $sentencia->execute();
    }

    function getCommentFromDB($id)
    {
        $sentencia = $this->db->prepare("SELECT * FROM comment WHERE id_comment=?");
        $sentencia->bindParam(1, $id, PDO::PARAM_INT);
        $sentencia->execute();
        $comment = $sentencia->fetch(PDO::FETCH_OBJ);
        return $comment;
    }
}
