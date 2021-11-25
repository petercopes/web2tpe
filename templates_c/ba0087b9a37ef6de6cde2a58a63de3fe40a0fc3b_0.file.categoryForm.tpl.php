<?php
/* Smarty version 3.1.39, created on 2021-11-25 01:41:45
  from 'C:\xampp\htdocs\web2tpe\templates\categoryForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619edbc97e25e6_63531821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba0087b9a37ef6de6cde2a58a63de3fe40a0fc3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2tpe\\templates\\categoryForm.tpl',
      1 => 1637618783,
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
function content_619edbc97e25e6_63531821 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main class="d-flex container-fluid p-5 justify-content-between h-100 flex-xl-column" style="min-height: 85vh;>
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <div class="card container-fluid d-flex justify-content-evenly p-4">
        <?php if ($_smarty_tpl->tpl_vars['action']->value == "add") {?>
            <form class="form-alta" action="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
add-category" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre de la Categoria</label>
                    <input placeholder="Nombre" type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Nombre de la Categoria</label>
                    <textarea placeholder="Descripcion" type="text" name="description" class="form-control"
                        id="description"></textarea>
                </div>
                <input class="btn btn-primary" type="submit" value="Guardar">
            </form>
        <?php } else { ?>
            <form class="form-alta" action="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
edit-category/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre de la Categoria</label>
                <input placeholder="Nombre" type="text" name="name" id="name" class="form-control"
                    value="<?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Nombre de la Categoria</label>
                <textarea placeholder="Descripcion" type="text" name="description" class="form-control"
                    id="description"><?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>
</textarea>
            </div>
            <input class="btn btn-primary" type="submit" value="Guardar">
            </form>
        <?php }?>
    </div>
</main>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
