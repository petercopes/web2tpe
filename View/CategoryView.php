<?php

class CategoryView
{

    function showCategories($categories)
    {
        echo "<h1>Categorias</h1>";
        echo "<ul>";
        foreach ($categories as $category) {
            echo "
                <li> 
                    <p>$category->name</p>
                    <span><a href='deleteCategory/$category->id_category'>X</a></span>
                    <span><a href='editCategoryForm/$category->id_category'>Editar</a></span>
                </li>
            ";
        }
        echo "</ul>";
        echo "<a href='showAddCategory'> Agregar Categoria </a>";
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
            <textarea type="text" name="description" id="description" value="'.$category->description.'"> </textarea>
            <input type="submit" value="Guardar">
        </form>
        ';
    }

}
