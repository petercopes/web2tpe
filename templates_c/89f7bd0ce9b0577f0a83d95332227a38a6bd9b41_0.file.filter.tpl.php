<?php
/* Smarty version 3.1.39, created on 2021-11-25 00:48:02
  from 'C:\xampp\htdocs\web2tpe\templates\filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ecf32773733_00825973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89f7bd0ce9b0577f0a83d95332227a38a6bd9b41' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2tpe\\templates\\filter.tpl',
      1 => 1637797677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619ecf32773733_00825973 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
      <form class="d-flex form-alta center" action="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
get-filtered-products" method="post">
        <input class="form-control me-2" type="text" placeholder="Palabra Clave" aria-label="Search" name="keyword" id="keywords" value=<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
>
        <input class="form-control me-2" type="text" placeholder="Precio Minimo" aria-label="Search"  name="minPrice" id="minPrice" value=<?php echo $_smarty_tpl->tpl_vars['minPrice']->value;?>
>
        <input class="form-control me-2" type="text" placeholder="Precio Maximo" aria-label="Search"  name="maxPrice" id="maxPrice" value=<?php echo $_smarty_tpl->tpl_vars['maxPrice']->value;?>
>
        
        <button class="btn btn-outline-primary" type="submit">Filtrar</button>
      </form>
  </div>
</div><?php }
}
