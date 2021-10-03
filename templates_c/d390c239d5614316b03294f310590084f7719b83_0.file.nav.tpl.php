<?php
/* Smarty version 3.1.39, created on 2021-10-03 03:02:58
  from '/opt/lampp/htdocs/web2tpe/templates/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61590142ac6a07_91926787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd390c239d5614316b03294f310590084f7719b83' => 
    array (
      0 => '/opt/lampp/htdocs/web2tpe/templates/nav.tpl',
      1 => 1633222761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61590142ac6a07_91926787 (Smarty_Internal_Template $_smarty_tpl) {
?><nav>
    <ul>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
home">Home</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
products">Productos</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
categories">Categorias</a></li>
        <?php if ($_smarty_tpl->tpl_vars['isUserLogged']->value == true) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
admin-actions">Admin actions</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
logout">Log Out</a></li>
        <?php } else { ?>

            <li><a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
login">Log In</a></li>
        <?php }?>
    </ul>
</nav><?php }
}
