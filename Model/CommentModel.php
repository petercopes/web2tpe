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
