<?php
/* Smarty version 3.1.39, created on 2021-10-02 23:27:53
  from '/opt/lampp/htdocs/web2tpe/templates/productList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6158ced90f96a4_74031861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '167eee49595ac51a5ca1e2f523224f27293f568f' => 
    array (
      0 => '/opt/lampp/htdocs/web2tpe/templates/productList.tpl',
      1 => 1633210071,
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
function content_6158ced90f96a4_74031861 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
            <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
            <ul class="list-group">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <li class="
                        list-group-item">
                            <p><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
 <span><a href='remove-product/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
'>X</a><a href='edit-product-form/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
'> Editar</a> </span></p>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
