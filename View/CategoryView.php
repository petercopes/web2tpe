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
                    <p style='display:inline;'>$category->name</p>
                    <a href='deleteCategory/$category->id_category'>X</a>
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

}
