<?php
require_once "./View/ApiView.php";
require_once "./Helpers/AuthApiHelper.php";

class ApiUserController{

    private $view;
    private $authHelper;

    function __construct(){
        $this->view = new ApiView();
        $this->authHelper = new AuthApiHelper();
    }

    function getToken($params = null) {
        $userpass = $this->authHelper->getBasic();
        $user = array("user"=>$userpass["user"]);
    
        // Si el usuario existe y las contraseñas coinciden
        if (true/*$user && password_verify($password, $user->password)*/) {
            $token = $this->authHelper->createToken($user);
            
            $this->view->response(["token"=>$token], 200);
        
        }else{
            $this->view->response("Usuario y contraseña incorrectos", 401);
        }
    }

    function getUser($params = null){
        $id = $params[":ID"];
        $user = $this->authHelper->getUser();
        if($user)
            if($id == $user->sub){
                $this->view->response($user, 200);
            }else{
                $this->view->response("Forbidden", 403);
            }
        else{
            $this->view->response("Unauthorized", 401);
        }
    }
}
