<?php
/* Smarty version 3.1.39, created on 2021-11-22 04:13:21
  from '/opt/lampp/htdocs/web2tpe/templates/commentList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619b0ad1c62467_74540503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79f574fee0aaae2f3c10345cc398e35c16cf89f7' => 
    array (
      0 => '/opt/lampp/htdocs/web2tpe/templates/commentList.tpl',
      1 => 1637550795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619b0ad1c62467_74540503 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div id="app">
        <ul id="lista-tareas" class="list-group">
            <li v-for="comment in comments" class="list-group-item" id="{{comment.id}}">
                <h4>
                    {{comment.username}} | {{comment.date}} | {{comment.rating}}
                </h4>
                <p>
                    {{comment.message}}
                </p>
                <button v-if="userRole == 1" id="deleteButton-{{comment.id}}" class="btn btn-danger deleteButton">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash"
                        viewBox="0 0 16 16">
                        <path
                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                        <path fill-rule="evenodd"
                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                    </svg>
                </button>
            </li>
        </ul>
        <div v-if="userRole == '2'" class="comment-form container" id="commentsFormContainer">
            {include file="templates/commentForm.tpl"}
        </div>

    </div>
<?php }
}
