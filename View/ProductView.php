<?php

class ProductView
{

    function showProducts($products)
    {
        echo "<h1>Productos</h1>";
        echo "<ul>";
        foreach ($products as $product) {
            echo "<li>
            <p>$product->name <span><a href='remove-product/$product->id_product'>X</a><a href='edit-product-form/$product->id_product'> Editar</a> </span></p>
            </li>";
        }
        echo "</ul>";
    }
    function showAddProductForm($categories){
        echo '  
            <form class="form-alta" action="'.BASE_URL.'/add-product" method="post">
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
    function showEditProductForm($product){
        echo '  
            <h2>Formulario de edicion</h2>
            <form class="form-alta" action="'.BASE_URL.'/edit-product/'.$product->id_product.'" method="post">
                <input placeholder="Nombre del producto" type="text" value="'.$product->name.'" name="name" id="name" required>
                <textarea placeholder="descripcion" type="text" value="'.$product->description.'" name="description" id="description" required> </textarea>
                <input placeholder="precio" type="number" value="'.$product->price.'"name="price" id="price" required>
                <select name="categoryId" value="'.$product->id_category.'" id="categoryId" required>
                <input type="submit" class="btn btn-primary" value="Guardar">
            </form>
            ';
    }

}
