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
        echo '
        <h2>Crear Categoria</h2>
        <form class="form-alta" action="addCategory" method="post">
            <input placeholder="nombre" type="text" name="name" id="name" required>
            <textarea placeholder="descripcion" type="text" name="description" id="description"> </textarea>
            <input type="submit" value="Guardar">
        </form>
        ';
    }

    function showEditCategoryForm($category) {
        echo '
        <h2>Edit Categoria</h2>
        <form class="form-alta" action="'.BASE_URL.'/editCategory/'.$category->id_category.'" method="post">
            <input type="text" name="name" id="name" value="'.$category->name.'" required>
            <textarea type="text" name="description" id="description">'.$category->description.'</textarea>
            <input type="submit" value="Guardar">
        </form>
        ';
    }

}