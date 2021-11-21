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

    function getComments()
    {
        $tareas = $this->model->getCommentsFromDB();
        return $this->view->response($tareas, 200);
    }

    function getComment($params = null)
    {
        $idComment = $params[":ID"];
        $tarea = $this->model->getCommentFromDB($idComment);
        if ($tarea) {
            return $this->view->response($tarea, 200);
        } else {
            return $this->view->response("No se ha encontrado el comentario con el id $idComment", 404);
        }
    }

    function deleteComment($params = null)
    {
        //agregar verificacion de permiso???
        $idComment = $params[":ID"];
        $product = $this->model->getCommentFromDB($idComment);

        if ($product) {
            $this->model->deleteCommentFromDB($idComment);
            return $this->view->response("El comentario con el id= $idComment fue borrada", 200);
        } else {
            return $this->view->response("No se ha encontrado el comentario con el id $idComment", 404);
        }
    }

    function addComment()
    {
        // obtengo el body del request (json)
        $body = $this->getBody();

        // TODO: VALIDACIONES -> 400 (Bad Request)

        $id = $this->model->addCommentToDB($body->username, $body->description);
        if ($id != 0) {
            $this->view->response("El comentario se insertó con el id= $id", 200);
        } else {
            $this->view->response("El comentario no se pudo insertar", 500);
        }
    }

    function updateComment($params = null)
    {
        $idComment = $params[':ID'];
        $body = $this->getBody();

        // TODO: VALIDACIONES -> 400 (Bad Request)
        $product = $this->model->getCommentFromDB($idComment);
        if ($product) {
            $this->model->editCommentOnDB($idComment, $body->name, $body->description);
            $this->view->response("El comentario se actualizó correctamente", 200);
        } else {
            return $this->view->response("No se ha encontrado el comentario con el id $idComment", 404);
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
