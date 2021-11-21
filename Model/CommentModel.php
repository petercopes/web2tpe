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

    function addCommentToDB($username, $description)
    {
        $sentencia = $this->db->prepare("INSERT INTO comment(name, description) VALUES(?, ?)");
        $sentencia->execute(array($username, $description));
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

    function editCommentOnDB($id, $name, $description)
    {
        $sentencia = $this->db->prepare("UPDATE comment SET name=?, description=? WHERE id_comment=?");
        $sentencia->execute(array($name, $description, $id));
    }
}
