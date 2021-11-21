<?php
require_once "./Model/CategoryModel.php.php";
require_once "./View/ApiView.php";

class ApiCategoryController
{

    private $model;
    private $view;

    function __construct()
    {
        $this->model = new CategoryModel();
        $this->view = new ApiView();
    }

    function getCategories()
    {
        $tareas = $this->model->getCategoriesFromDB();
        return $this->view->response($tareas, 200);
    }

    function getCategory($params = null)
    {
        $idCategory = $params[":ID"];
        $tarea = $this->model->getCategoryFromDB($idCategory);
        if ($tarea) {
            return $this->view->response($tarea, 200);
        } else {
            return $this->view->response("No se ha encontrado la categoria con el id $idCategory", 404);
        }
    }

    function deleteCategory($params = null)
    {
        //agregar verificacion de permiso???
        $idCategory = $params[":ID"];
        $category = $this->model->getCategoryFromDB($idCategory);

        if ($category) {
            $this->model->deleteCategoryFromDB($idCategory);
            return $this->view->response("La categoria con el id= $idCategory fue borrada", 200);
        } else {
            return $this->view->response("No se ha encontrado la categoria con el id $idCategory", 404);
        }
    }

    function insertCategory()
    {
        // obtengo el body del request (json)
        $body = $this->getBody();

        // TODO: VALIDACIONES -> 400 (Bad Request)

        $id = $this->model->addCategoryToDB($body->name, $body->description);
        if ($id != 0) {
            $this->view->response("La categoria se insertó con el id= $id", 200);
        } else {
            $this->view->response("La categoria no se pudo insertar", 500);
        }
    }

    function updateCategory($params = null)
    {
        $idCategory = $params[':ID'];
        $body = $this->getBody();

        // TODO: VALIDACIONES -> 400 (Bad Request)
        $category = $this->model->getCategoryFromDB($idCategory);
        if ($category) {
            $this->model->editCategoryOnDB($idCategory, $body->name, $body->description);
            $this->view->response("La categoria se actualizó correctamente", 200);
        } else {
            return $this->view->response("No se ha encontrado la categoria con el id $idCategory", 404);
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
