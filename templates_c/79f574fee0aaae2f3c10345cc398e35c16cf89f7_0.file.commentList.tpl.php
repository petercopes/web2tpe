<?php
/* Smarty version 3.1.39, created on 2021-11-22 17:10:01
  from '/opt/lampp/htdocs/web2tpe/templates/commentList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619bc0d967a384_02301616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79f574fee0aaae2f3c10345cc398e35c16cf89f7' => 
    array (
      0 => '/opt/lampp/htdocs/web2tpe/templates/commentList.tpl',
      1 => 1637597398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/commentForm.tpl' => 1,
  ),
),false)) {
function content_619bc0d967a384_02301616 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div id="app">
        <ul id="lista-tareas" class="list-group">
            
        </ul>
        <div v-if="userRole == '2'" class="comment-form container" id="commentsFormContainer">
            <?php $_smarty_tpl->_subTemplateRender("file:templates/commentForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>

    </div>
<?php }
}
