<?php
require_once "./Model/ProductModel.php";
require_once "./View/ApiView.php";

class ApiProductController
{

    private $model;
    private $view;

    function __construct()
    {
        $this->model = new ProductModel();
        $this->view = new ApiView();
    }

    function getProducts()
    {
        $tareas = $this->model->getProductsFromDB();
        return $this->view->response($tareas, 200);
    }

    function getProduct($params = null)
    {
        $idProduct = $params[":ID"];
        $tarea = $this->model->getProductFromDB($idProduct);
        if ($tarea) {
            return $this->view->response($tarea, 200);
        } else {
            return $this->view->response("No se ha encontrado la categoria con el id $idProduct", 404);
        }
    }

    function deleteProduct($params = null)
    {
        //agregar verificacion de permiso???
        $idProduct = $params[":ID"];
        $product = $this->model->getProductFromDB($idProduct);

        if ($product) {
            $this->model->deleteProductFromDB($idProduct);
            return $this->view->response("La categoria con el id= $idProduct fue borrada", 200);
        } else {
            return $this->view->response("No se ha encontrado la categoria con el id $idProduct", 404);
        }
    }

    function insertProduct()
    {
        // obtengo el body del request (json)
        $body = $this->getBody();

        // TODO: VALIDACIONES -> 400 (Bad Request)

        $id = $this->model->addProductToDB($body->name, $body->description, $body->price, $body->categoryId);
        if ($id != 0) {
            $this->view->response("La categoria se insertó con el id= $id", 200);
        } else {
            $this->view->response("La categoria no se pudo insertar", 500);
        }
    }

    function updateProduct($params = null)
    {
        $idProduct = $params[':ID'];
        $body = $this->getBody();

        // TODO: VALIDACIONES -> 400 (Bad Request)
        $product = $this->model->getProductFromDB($idProduct);
        if ($product) {
            $this->model->updateProductOnDB($idProduct, $body->name, $body->description, $body->price);
            $this->view->response("La categoria se actualizó correctamente", 200);
        } else {
            return $this->view->response("No se ha encontrado la categoria con el id $idProduct", 404);
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
