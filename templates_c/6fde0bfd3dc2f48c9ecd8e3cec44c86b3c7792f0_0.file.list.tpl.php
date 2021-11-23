<?php
/* Smarty version 3.1.39, created on 2021-11-23 00:30:54
  from 'C:\xampp\htdocs\web2tpe\templates\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619c282e345334_78830498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fde0bfd3dc2f48c9ecd8e3cec44c86b3c7792f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2tpe\\templates\\list.tpl',
      1 => 1637618783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619c282e345334_78830498 (Smarty_Internal_Template $_smarty_tpl) {
?><main style="min-height: 85vh;>
<div class="container mt-5" >
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <?php if (!$_smarty_tpl->tpl_vars['elements']->value) {?>
        <p>No hay elementos cargados</p>
    <?php } else { ?>
        <div class="mt-3 w-75">
            <table class="table">
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['elements']->value, 'element');
$_smarty_tpl->tpl_vars['element']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->do_else = false;
?>
                        <tr>
                            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['element']->value->name;?>
</th>
                            <?php if ($_smarty_tpl->tpl_vars['elemType']->value == "product" && (isset($_smarty_tpl->tpl_vars['element']->value->category_name))) {?>
                                <td><?php echo $_smarty_tpl->tpl_vars['element']->value->category_name;?>
</td>
                            <?php }?>
                            <td>
                                <div class="d-flex align-items-center justify-content-end">
                                    <?php if ($_smarty_tpl->tpl_vars['userRole']->value == 1) {?>
                                        <div class="mx-2">
                                            <a class="text-secondary" href="edit-<?php echo $_smarty_tpl->tpl_vars['elemType']->value;?>
-form/<?php echo $_smarty_tpl->tpl_vars['element']->value->{$_smarty_tpl->tpl_vars['idKey']->value};?>
">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="mx-2">
                                            <a class="text-secondary" href="remove-<?php echo $_smarty_tpl->tpl_vars['elemType']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['element']->value->{$_smarty_tpl->tpl_vars['idKey']->value};?>
">
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
                                    <div>
                                        <a class="mx-2 text-secondary text-decoration-none"
                                            href="<?php echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['elemType']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['element']->value->{$_smarty_tpl->tpl_vars['idKey']->value};?>
">Ver Más</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['userRole']->value == 1) {?>
        <div class="btn btn-light">
            <a class="mt-3 text-secondary text-decoration-none" href="<?php echo $_smarty_tpl->tpl_vars['base']->value;
echo $_smarty_tpl->tpl_vars['elemType']->value;?>
-add-form"><?php echo $_smarty_tpl->tpl_vars['addText']->value;?>
</a>
        </div>
    <?php }?>
</div>

</main><?php }
}
