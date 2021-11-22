<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class CommentView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showComments($product, $userRole)
    {
        $nombreProd = $product->name;
        $this->smarty->assign('tituloPagina', "Comentarios sobre $nombreProd");
        $this->smarty->assign('base', BASE_URL);
        $this->smarty->assign('baseApi', BASE_URL);
        $this->smarty->assign('titulo', 'Comentarios');
        $this->smarty->assign('idKey', $product->id_product);
        $this->smarty->assign('addText', 'Agregar Nuevo');
        $this->smarty->assign('userRole', $userRole);
        $this->smarty->display('templates/comments.tpl');
    }
}
