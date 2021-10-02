<?php
/* Smarty version 3.1.39, created on 2021-10-03 00:07:54
  from '/opt/lampp/htdocs/web2tpe/templates/productForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6158d83ae45001_31383721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ed917251085e820caaca2a5f83839aa12d879da' => 
    array (
      0 => '/opt/lampp/htdocs/web2tpe/templates/productForm.tpl',
      1 => 1633212213,
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
function content_6158d83ae45001_31383721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
<form class="form-alta" action="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
add-product" method="post">
                <input placeholder="Nombre del producto" type="text" name="name" id="name" required>
                <textarea placeholder="descripcion" type="text" name="description" id="description" required> </textarea>
                <input placeholder="precio" type="number" name="price" id="price" required>
                <select name="categoryId" id="categoryId">';
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['category']->value->id_category);?>
                    <option value=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
><?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
</option>;
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <input type="submit" class="btn btn-primary" value="Guardar">
</form>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
