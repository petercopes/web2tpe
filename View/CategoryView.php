<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class CategoryView
{ 
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showCategories($categories, $userRole)
    {
        $this->smarty->assign('tituloPagina','Categorias');
        $this->smarty->assign('base',BASE_URL);
        $this->smarty->assign('titulo','Categorias');
        $this->smarty->assign('elements',$categories);
        $this->smarty->assign('idKey','id_category');
        $this->smarty->assign('elemType','category');
        $this->smarty->assign('addText','Agregar Nueva');
        $this->smarty->assign('userRole', $userRole);
        $this->smarty->display('templates/categoryList.tpl');  
    }

    function showAddCategoryForm() {
        $this->smarty->assign('tituloPagina','Añadir Categoria');
        $this->smarty->assign('base',BASE_URL);
        $this->smarty->assign('titulo','Añadir una Categoria');
        $this->smarty->assign('action','add');
        $this->smarty->assign('userRole', 1);
        $this->smarty->display('templates/categoryForm.tpl');  
    }

    function showEditCategoryForm($category) {
        $this->smarty->assign('tituloPagina','Editar Categoria');
        $this->smarty->assign('base',BASE_URL);
        $this->smarty->assign('titulo','Editar Categoria');
        $this->smarty->assign('action','edit');
        $this->smarty->assign('category',$category);
        $this->smarty->assign('userRole', 1);
        $this->smarty->display('templates/categoryForm.tpl');  
    }
    function showCategory($category,$products, $userRole){
        $this->smarty->assign('category',$category);
        $this->smarty->assign('elements',$products);
        $this->smarty->assign('tituloPagina',"Categorias | $category->name ");
        $this->smarty->assign('base',BASE_URL);
        $this->smarty->assign('titulo','Productos en esta categoria: ');
        $this->smarty->assign('idKey','id_product');
        $this->smarty->assign('elemType','product');
        $this->smarty->assign('addText','Agregar Nuevo');
        $this->smarty->assign('userRole',$userRole);
        $this->smarty->display('templates/categoryDetail.tpl');
    }

}