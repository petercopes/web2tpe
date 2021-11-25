<?php
/* Smarty version 3.1.39, created on 2021-11-25 02:25:47
  from 'C:\xampp\htdocs\web2tpe\templates\alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ee61bc35983_79766394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6b3fd65b191f6ce84b205304f28859978c180e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2tpe\\templates\\alert.tpl',
      1 => 1637190536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619ee61bc35983_79766394 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['result']->value == "success") {?>
  <div class="alert alert-success w-25 m-auto text-center" role="alert">
    <?php echo $_smarty_tpl->tpl_vars['alertMessage']->value;?>

  </div>
<?php } else { ?>
  <div class="alert alert-danger w-25 m-auto text-center" role="alert">
    <?php echo $_smarty_tpl->tpl_vars['alertMessage']->value;?>

  </div>
<?php }
}
}
