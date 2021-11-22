<?php
/* Smarty version 3.1.39, created on 2021-11-22 19:43:15
  from 'C:\xampp\htdocs\web2tpe\templates\categoryDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619be4c3eb12f2_61154994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f15633127d0e774b53fa75e08417b378e8f4960' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2tpe\\templates\\categoryDetail.tpl',
      1 => 1637190536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/nav.tpl' => 1,
    'file:templates/list.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619be4c3eb12f2_61154994 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="d-flex container-fluid p-5 justify-content-between h-100 flex-xl-column">
    <a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
categories" class="card-link text-secondary text-decoration-none mb-1">Volver</a>
    <div class="card container-fluid d-flex justify-content-evenly">
        <div class="card-body">
            <h1 class="card-title mb-3"><?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
</h1>
            <h2 class="card-subtitle mb-2 text-muted">Acerca de esta Categoria:</h2>
            <p><?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>
</p>

            <?php $_smarty_tpl->_subTemplateRender("file:templates/list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>

</main>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
