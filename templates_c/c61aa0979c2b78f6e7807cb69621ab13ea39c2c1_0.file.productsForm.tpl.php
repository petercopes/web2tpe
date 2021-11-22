<?php
/* Smarty version 3.1.39, created on 2021-11-22 20:11:09
  from 'C:\xampp\htdocs\web2tpe\templates\productsForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619beb4d2d53d7_24944432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c61aa0979c2b78f6e7807cb69621ab13ea39c2c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2tpe\\templates\\productsForm.tpl',
      1 => 1637542904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/nav.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619beb4d2d53d7_24944432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main class="d-flex container-fluid p-5 justify-content-between h-100 flex-xl-column">
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <div class="card container-fluid d-flex justify-content-evenly p-4" >
        <?php if ($_smarty_tpl->tpl_vars['act']->value == 'add') {?>
            <form class="form-alta" action="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
add-product" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre del Producto</label>
                    <input  type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descripcion</label>
                    <textarea placeholder="descripcion" class="form-control" type="text" name="description" id="description"
                        required> </textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Precio</label>
                    <input  class="form-control" type="number" name="price" id="price" required>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Categoria</label>
                    <select name="categoryId" id="categoryId"  class="form-control">';
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                            <option value=<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
><?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
</option>;
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" value="Añadir">
            </form>

        <?php } else { ?>
            <form class="form-alta" action="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
edit-product/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre del Producto</label>
                    <input class="form-control" placeholder="Nombre del producto" type="text" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
" name="name" id="name" required>      
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descripcion</label>
                    <textarea class="form-control" placeholder="descripcion" type="text" name="description" id="description"
                    required><?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>
</textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Precio</label>
                    <input  class="form-control"placeholder="precio" type="number" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
" name="price" id="price" required>
                </div>
                <input type="submit" class="btn btn-primary" value="Guardar">
            </form>
        <?php }?>
    </div>
</main>    
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
