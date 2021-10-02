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
        $this->smarty->assign('elements',$products);
        $this->smarty->assign('idKey','id_product');
        $this->smarty->assign('elemType','product');
        $this->smarty->display('templates/list.tpl');        
    }
    
    function showAddProductForm($categories){
        $this->smarty->assign('tituloPagina','Añadir Producto');
        $this->smarty->assign('base',BASE_URL);
        $this->smarty->assign('titulo','Añadir un Producto');
        $this->smarty->assign('categories',$categories);
        $this->smarty->assign('act','add');
        $this->smarty->display('templates/productsForm.tpl'); 
    }
    function showEditProductForm($product){
        $this->smarty->assign('tituloPagina','Editar Producto');
        $this->smarty->assign('base',BASE_URL);
        $this->smarty->assign('titulo','Editar Producto');
        $this->smarty->assign('product',$product);
        $this->smarty->assign('act','edit');
        $this->smarty->display('templates/productsForm.tpl'); 
    }

}
