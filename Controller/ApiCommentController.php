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

    function addComment($params = null)
    {
        // obtengo el body del request (json)
        $body = $this->getBody();
        var_dump($body);
        // TODO: VALIDACIONES -> 400 (Bad Request)

        $id = $this->model->addCommentToDB($body->email, $body->message, $body->rating, $body->id_product);
        if ($id != 0) {
            $this->view->response("El comentario se insertó con el id= $id", 200);
        } else {
            $this->view->response("El comentario no se pudo insertar", 500);
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
