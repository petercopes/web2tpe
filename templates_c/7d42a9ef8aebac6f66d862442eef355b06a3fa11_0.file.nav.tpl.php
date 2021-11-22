<?php
/* Smarty version 3.1.39, created on 2021-11-22 03:04:25
  from 'C:\xampp\htdocs\web2tpe\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619afaa9c3d1f4_86812759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d42a9ef8aebac6f66d862442eef355b06a3fa11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2tpe\\templates\\nav.tpl',
      1 => 1637546649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619afaa9c3d1f4_86812759 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar  navbar-dark bg-dark justify-content-start">
    <ul class=' navbar-nav flex-row '>
        <li class='nav-item m-2'><a class='nav-link' href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
home">Home</a></li>
        <li class='nav-item m-2'><a class='nav-link' href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
products">Productos</a></li>
        <li class='nav-item m-2'><a class='nav-link' href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
categories">Categorias</a></li>
        <?php if ($_smarty_tpl->tpl_vars['isUserLogged']->value == true) {?>
            <li class='nav-item m-2'><a class='nav-link' href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
logout">Log Out</a></li>
        <?php } else { ?>
            <li class='nav-item m-2'><a class='nav-link' href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
login">Log In</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['isUserAdmin']->value == true) {?>
            <li class='nav-item m-2'><a class='nav-link' href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
backoffice">Back Office</a></li>
        <?php }?>
    </ul>
</nav><?php }
}
