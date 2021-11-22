<?php
/* Smarty version 3.1.39, created on 2021-11-22 20:59:50
  from '/opt/lampp/htdocs/web2tpe/templates/productDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619bf6b658f8a3_59212079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ae48105b87683eef193b91956ec84004807793a' => 
    array (
      0 => '/opt/lampp/htdocs/web2tpe/templates/productDetail.tpl',
      1 => 1637611186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/nav.tpl' => 1,
    'file:templates/commentList.tpl' => 2,
    'file:templates/commentForm.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619bf6b658f8a3_59212079 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main class="d-flex container-fluid p-5 justify-content-between h-100 flex-xl-column" style="min-height: 85vh;">
    <a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
products" class="card-link text-secondary text-decoration-none mb-1">Volver</a>
    <div class="card container-fluid d-flex justify-content-evenly">
        <div class="card-body">
            <h2 class="card-title"><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</h2>
            <h3 class="card-subtitle mb-2 text-muted"><?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</h3>
            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>
</p>
            <?php if ($_smarty_tpl->tpl_vars['userRole']->value == '1') {?>
                <div class="container-fluid d-flex justify-content-evenly flex-row">
                    <a href="edit-product-form/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
" class=" card-link btn btn-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path
                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd"
                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>
                    </a>
                    <a href="remove-product/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
" class="btn btn-danger card-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-trash" viewBox="0 0 16 16">
                            <path
                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                            <path fill-rule="evenodd"
                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                        </svg>
                    </a>
                </div>

            <?php }?>
        </div>
    </div>

    </div>
    <?php if ($_smarty_tpl->tpl_vars['userRole']->value != '3') {?>
        <div class="card container-fluid d-flex justify-content-evenly" id="commentsContainer" user-role=<?php echo $_smarty_tpl->tpl_vars['userRole']->value;?>
>
            <?php $_smarty_tpl->_subTemplateRender("file:templates/commentList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("file:templates/commentForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
        </div>
    <?php } else { ?>
    <div class="card container-fluid d-flex justify-content-evenly "  id="commentsContainer">
        <?php $_smarty_tpl->_subTemplateRender("file:templates/commentList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </div>
    <?php }?>
</main>
<?php echo '<script'; ?>
 src='js/comments.js'><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}