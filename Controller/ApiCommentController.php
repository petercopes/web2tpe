<?php
require_once "./Model/CommentModel.php";
require_once "./View/ApiView.php";

class ApiCommentController
{

    private $model;
    private $view;

    function __construct()
    {
        $this->model = new CommentModel();
        $this->view = new ApiView();
    }

    function getComments($params = null)
    {
        $comments = $this->model->getCommentsFromDB();
        if (isset($comments) && !empty($comments)) {
            return $this->view->response($comments, 200);
        } else {
            return $this->view->response("No se han encontrado los comentarios", 404);
        }
    }

    function getComment($params = null)
    {
        $idComment = $params[":ID"];
        $comment = $this->model->getCommentFromDB($idComment);
        if ($comment) {
            return $this->view->response($comment, 200);
        } else {
            return $this->view->response("No se ha encontrado el comentario con el id $idComment", 404);
        }
    }

    function deleteComment($params = null)
    {
        //agregar verificacion de permiso???
        $idComment = $params[":ID"];
        $comment = $this->model->getCommentFromDB($idComment);

        if ($comment) {
            $this->model->deleteCommentFromDB($idComment);
            return $this->view->response("El comentario con el id= $idComment fue borrada", 200);
        } else {
            return $this->view->response("No se ha encontrado el comentario con el id $idComment", 404);
        }
    }

    function addComment($params = null)
    {
        // obtengo el body del request (json)
        $body = $this->getBody();
        if (isset($body) && isset($body->email) && isset($body->message) && isset($body->rating) && !empty($body->email) && !empty($body->message) &&  !empty($body->rating)) {
            $id = $this->model->addCommentToDB($body->email, $body->message, $body->rating, $body->id_product);
            if ($id != 0) {
                $this->view->response("El comentario se insertó con el id= $id", 200);
            } else {
                $this->view->response("El comentario no se pudo insertar", 500);
            }
        } else {
            $this->view->response("El comentario no se pudo insertar porque faltan datos", 400);
        }
    }

    /**
     * Devuelve el body del request
     */
    private function getBody()
    {
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString);
    }
}
