<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class CategoryView
{ 
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showCategories($categories)
    {
        $this->smarty->assign('tituloPagina','Categorias');
        $this->smarty->assign('base',BASE_URL);
        $this->smarty->assign('titulo','Categorias');
        $this->smarty->assign('elements',$categories);
        $this->smarty->assign('idKey','id_category');
        $this->smarty->assign('elemType','category');
        $this->smarty->display('templates/list.tpl');  
    }

    function showAddCategoryForm() {
        $this->smarty->assign('tituloPagina','Añadir Categoria');
        $this->smarty->assign('base',BASE_URL);
        $this->smarty->assign('titulo','Agregar Categoria');
        $this->smarty->assign('action','add');
        $this->smarty->display('templates/categoryForm.tpl');  
    }

    function showEditCategoryForm($category) {
        $this->smarty->assign('tituloPagina','Editar Categoria');
        $this->smarty->assign('base',BASE_URL);
        $this->smarty->assign('titulo','Editar Categoria');
        $this->smarty->assign('action','edit');
        $this->smarty->assign('category',$category);
        $this->smarty->display('templates/categoryForm.tpl');  
    }

}