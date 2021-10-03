<?php
/* Smarty version 3.1.39, created on 2021-10-03 01:40:58
  from '/opt/lampp/htdocs/web2tpe/templates/adminActions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6158ee0a2cb661_29482556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9373021c311cf952056cc44760b889e4ad097777' => 
    array (
      0 => '/opt/lampp/htdocs/web2tpe/templates/adminActions.tpl',
      1 => 1633218055,
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
function content_6158ee0a2cb661_29482556 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <h1>Administrador</h1>
    <nav>
        <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
product-add-form">Agregar Producto</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
category-add-form">Agregar Categoria</a></li>
        </ul>
    </nav>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
