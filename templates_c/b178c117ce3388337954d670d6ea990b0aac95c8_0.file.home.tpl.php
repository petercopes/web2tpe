<?php
/* Smarty version 3.1.39, created on 2021-11-22 19:42:36
  from 'C:\xampp\htdocs\web2tpe\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619be49ca0a4a3_58953170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b178c117ce3388337954d670d6ea990b0aac95c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2tpe\\templates\\home.tpl',
      1 => 1637190536,
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
function content_619be49ca0a4a3_58953170 (Smarty_Internal_Template $_smarty_tpl) {
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
