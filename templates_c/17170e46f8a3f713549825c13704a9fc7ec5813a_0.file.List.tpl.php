<?php
/* Smarty version 3.1.39, created on 2021-10-03 00:11:15
  from '/opt/lampp/htdocs/web2tpe/templates/List.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6158d9034c42e2_06364694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17170e46f8a3f713549825c13704a9fc7ec5813a' => 
    array (
      0 => '/opt/lampp/htdocs/web2tpe/templates/List.tpl',
      1 => 1633212670,
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
function content_6158d9034c42e2_06364694 (Smarty_Internal_Template $_smarty_tpl) {
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['elements']->value, 'element');
$_smarty_tpl->tpl_vars['element']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->do_else = false;
?>
                    <li class="
                        list-group-item">
                            <p><?php echo $_smarty_tpl->tpl_vars['element']->value->name;?>
 <span><a href="remove-<?php echo $_smarty_tpl->tpl_vars['elemType']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['element']->value->{$_smarty_tpl->tpl_vars['idKey']->value};?>
">X</a><a href="edit-<?php echo $_smarty_tpl->tpl_vars['elemType']->value;?>
-form/<?php echo $_smarty_tpl->tpl_vars['element']->value->{$_smarty_tpl->tpl_vars['idKey']->value};?>
"> Editar</a> </span></p>
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
