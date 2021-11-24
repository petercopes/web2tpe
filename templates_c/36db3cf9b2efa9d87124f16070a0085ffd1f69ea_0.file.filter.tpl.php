<?php
/* Smarty version 3.1.39, created on 2021-11-23 00:30:54
  from 'C:\xampp\htdocs\web2tpe\templates\templates\filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c282e330d81_95041377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36db3cf9b2efa9d87124f16070a0085ffd1f69ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2tpe\\templates\\templates\\filter.tpl',
      1 => 1637623249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619c282e330d81_95041377 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="card container-fluid d-flex justify-content-evenly p-4">
    <form class="form-alta" action="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
get-filtered-products" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Palabra Clave</label>
            <input placeholder="Nombre" type="text" name="keywords" id="keywords" class="form-control">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Min Precio</label>
            <input  type="number" name="minPrince" id="minPrice" class="form-control">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Max Precio</label>
            <input  type="number" name="maxPrice" id="maxPrice" class="form-control">
        </div>
        <input class="btn btn-primary" type="submit" value="Guardar">
    </form>
</div><?php }
}
