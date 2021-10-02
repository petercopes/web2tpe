<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class ProductView
{  
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showProducts($products)
    {
        $this->smarty->assign('tituloPagina','Productos');
        $this->smarty->assign('base',BASE_URL);
        $this->smarty->assign('titulo','Productos');
        $this->smarty->assign('products',$products);
        $this->smarty->display('templates/productList.tpl');        
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
                <textarea placeholder="descripcion" type="text"  name="description" id="description" required>'.$product->description.' </textarea>
                <input placeholder="precio" type="number" value="'.$product->price.'"name="price" id="price" required>
                <input type="submit" class="btn btn-primary" value="Guardar">
            </form>
            ';
    }

}
