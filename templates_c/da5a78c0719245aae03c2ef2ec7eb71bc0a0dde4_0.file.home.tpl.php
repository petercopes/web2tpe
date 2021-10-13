<?php
/* Smarty version 3.1.39, created on 2021-10-13 20:36:38
  from '/opt/lampp/htdocs/web2tpe/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6167273662d4b9_78218608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da5a78c0719245aae03c2ef2ec7eb71bc0a0dde4' => 
    array (
      0 => '/opt/lampp/htdocs/web2tpe/templates/home.tpl',
      1 => 1634150193,
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
function content_6167273662d4b9_78218608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:templates/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main class="d-flex container-fluid p-5 justify-content-between h-100 flex-xl-column">
    <section class="container flex center text-center">
        <h1>Bienvenido al catalogo de La Femme!</h1>
        <h2>
            En este sitio encontraras el stock de productos de nuestra marca.
            Todos ellos se encuentran actualmente en stock y pueden ser enviados para su reventa!
            Para mas información podes comunicarte con nostros a traves de nuestros canales de contacto.
        </h2>
    </section>
</main>
<?php if ($_smarty_tpl->tpl_vars['showAlert']->value == true) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:templates/alert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
