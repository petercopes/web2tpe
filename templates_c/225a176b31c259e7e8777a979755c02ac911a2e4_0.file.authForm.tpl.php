<?php
/* Smarty version 3.1.39, created on 2021-11-25 00:57:58
  from 'C:\xampp\htdocs\web2tpe\templates\authForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ed186edfcd9_44294489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '225a176b31c259e7e8777a979755c02ac911a2e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2tpe\\templates\\authForm.tpl',
      1 => 1637798272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/nav.tpl' => 1,
    'file:templates/alert.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619ed186edfcd9_44294489 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main class="d-flex container-fluid p-5 h-100 flex-column" style="min-height: 85vh; max-width: 600px;">
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <div class="card container-fluid d-flex justify-content-evenly p-4 mb-4">
        <?php if ($_smarty_tpl->tpl_vars['action']->value === 'create-user') {?>
            </form>

            <form class="form-login" action="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
create-user" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input placeholder="Email" type="text" name="email" id="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input placeholder="Contraseña" type="password" name="password" id="password" class="form-control"
                        required>
                </div>
                <input type="submit" class="btn btn-primary" value="Crear">
            </form>
        <?php } else { ?>

            <form class="form-login" action="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
verify-user" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input placeholder="Email" type="text" name="email" id="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input placeholder="Contraseña" type="password" name="password" id="password" class="form-control"
                        required>
                </div>
                <input type="submit" class="btn btn-primary" value="Log In">
            </form>

            <p class="my-2">No estas registrado? <a class="text-secondary text-decoration-none" href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
create-user-form">Crear usuario</a> </p>
        <?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['showAlert']->value == true) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:templates/alert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
</main>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
