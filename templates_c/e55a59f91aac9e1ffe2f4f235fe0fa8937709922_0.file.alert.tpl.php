<?php
/* Smarty version 3.1.39, created on 2021-10-13 21:34:25
  from '/opt/lampp/htdocs/web2tpe/templates/alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616734c1967310_20098869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e55a59f91aac9e1ffe2f4f235fe0fa8937709922' => 
    array (
      0 => '/opt/lampp/htdocs/web2tpe/templates/alert.tpl',
      1 => 1634153663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616734c1967310_20098869 (Smarty_Internal_Template $_smarty_tpl) {
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
