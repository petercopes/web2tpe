<?php
/* Smarty version 3.1.39, created on 2021-11-22 17:10:01
  from '/opt/lampp/htdocs/web2tpe/templates/commentForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619bc0d9695ee4_03950354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba753d4fa4461009f6331c8c7e82884bca906e5b' => 
    array (
      0 => '/opt/lampp/htdocs/web2tpe/templates/commentForm.tpl',
      1 => 1637596666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619bc0d9695ee4_03950354 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="form-alta" id="commentForm" action="<?php echo $_smarty_tpl->tpl_vars['baseApi']->value;?>
comments" method="post">
    <div class="mb-3">
        <input placeholder="Deja un comentario" hidden type="email" name="email" id="email" value=<?php echo $_smarty_tpl->tpl_vars['email']->value;?>

            class="form-control">
    </div>
    <div class="mb-3">
        <input placeholder="Deja un comentario" type="text" name="message" id="message" class="form-control" required>
    </div>
    <div class="mb-3">
        <input placeholder="Nombre" type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <select name="rating" id="rating" class="form-control">'
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
            <option value=5>5</option>
        </select>
    </div>

    <input class="btn btn-primary" type="submit" value="Guardar">
</form><?php }
}
