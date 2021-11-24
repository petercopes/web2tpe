<?php
/* Smarty version 3.1.39, created on 2021-11-24 02:48:32
  from 'C:\xampp\htdocs\web2tpe\templates\commentForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619d99f0c44a95_31958943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0073fdd4c2c206f2efdf9012bbd00e0a0874ee35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2tpe\\templates\\commentForm.tpl',
      1 => 1637718217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619d99f0c44a95_31958943 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="form-alta" id="commentForm" action="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/api/comments" method="POST">
    <div class="mb-3">
        <input  hidden type="email" name="email" id="email" value=<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
>
        <input  hidden type="number" name="id_product" id="id_product" value=<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
>
    </div>
    <div class="mb-3">
        <input placeholder="Deja un comentario" type="text" name="message" id="message" class="form-control" required>
    </div>
    <div class="mb-3">
        <select name="rating" id="rating" class="form-control" required>
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
