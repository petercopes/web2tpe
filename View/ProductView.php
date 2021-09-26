<?php

class ProductView
{

    function showProducts($products)
    {
        echo "<h1>Productos</h1>";
        echo "<ul>";
        foreach ($products as $product) {
            echo "<li> $product->name </li>";
        }
        echo "</ul>";
    }
    function showAddProductForm($categories){
        echo '  
            <form class="form-alta" action="createProduct" method="post">
                <input placeholder="Nombre del producto" type="text" name="name" id="name" required>
                <textarea placeholder="descripcion" type="text" name="description" id="description" required> </textarea>
                <input placeholder="precio" type="number" name="price" id="price" required>
                <select name="categoryId" id="categoryId">';
                foreach ($categories as $category){
                    $id= $category->id_category;
                    echo "<option value='$id'>$category->name</option>";
                };
                echo '</select>
                <input type="submit" class="btn btn-primary" value="Guardar">
            </form>
            ';
    }

}
