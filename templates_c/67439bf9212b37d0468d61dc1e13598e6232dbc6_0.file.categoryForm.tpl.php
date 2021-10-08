<?php
/* Smarty version 3.1.39, created on 2021-10-08 20:40:00
  from '/opt/lampp/htdocs/web2tpe/templates/categoryForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61609080f40212_13473333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67439bf9212b37d0468d61dc1e13598e6232dbc6' => 
    array (
      0 => '/opt/lampp/htdocs/web2tpe/templates/categoryForm.tpl',
      1 => 1633712332,
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
function content_61609080f40212_13473333 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
            <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
            <?php if ($_smarty_tpl->tpl_vars['action']->value == "add") {?>
                <form class="form-alta" action="add-category" method="post">
                    <input placeholder="nombre" type="text" name="name" id="name" required>
                    <textarea placeholder="descripcion" type="text" name="description" id="description"> </textarea>
                    <input type="submit" value="Guardar">
                </form>
            <?php } else { ?>
                <form class="form-alta" action="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
edit-category/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
" method="post">
                    <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
" required>
                    <textarea type="text" name="description" id="description"><?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>
</textarea>
                    <input type="submit" value="Guardar">
                </form>
            <?php }?>
            </div>
        </div>

    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
