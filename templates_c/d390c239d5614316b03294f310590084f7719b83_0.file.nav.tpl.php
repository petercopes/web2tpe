<?php
/* Smarty version 3.1.39, created on 2021-11-22 20:25:19
  from '/opt/lampp/htdocs/web2tpe/templates/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619bee9fbbdb24_01931407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd390c239d5614316b03294f310590084f7719b83' => 
    array (
      0 => '/opt/lampp/htdocs/web2tpe/templates/nav.tpl',
      1 => 1637608754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619bee9fbbdb24_01931407 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar  navbar-dark bg-dark justify-content-start">
    <ul class=' navbar-nav flex-row '>
        <li class='nav-item m-2'><a class='nav-link' href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
home">Home</a></li>
        <li class='nav-item m-2'><a class='nav-link' href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
products">Productos</a></li>
        <li class='nav-item m-2'><a class='nav-link' href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
categories">Categorias</a></li>
        <?php if (!empty($_smarty_tpl->tpl_vars['userRole']->value) && $_smarty_tpl->tpl_vars['userRole']->value !== 3) {?>
            <li class='nav-item m-2'><a class='nav-link' href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
logout">Log Out</a></li>
        <?php } else { ?>
            <li class='nav-item m-2'><a class='nav-link' href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
login">Log In</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['userRole']->value == "1") {?>
            <li class='nav-item m-2'><a class='nav-link' href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
backoffice">Back Office</a></li>
        <?php }?>
    </ul>
</nav><?php }
}
