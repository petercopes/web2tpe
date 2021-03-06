<?php
/* Smarty version 3.1.39, created on 2021-11-25 02:02:44
  from 'C:\xampp\htdocs\web2tpe\templates\commentList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ee0b46ffa31_15750665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab77ea66e13da49a9c9f2c6891dfccc65d4163f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2tpe\\templates\\commentList.tpl',
      1 => 1637802162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619ee0b46ffa31_15750665 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="container p-3 m-3 " id="app">
        <div class="container">
            <div class="row ">
                <div class="col-7 d-flex align-items-end">
                    <h3 class="mb-0">Comentarios</h3>
                </div>
            </div>
            <div class="row mt-2 mb-2">
                <div class="col">
                    <div class="row">
                        <label for="rating">Filtrar por puntaje:</label>
                    </div>
                    <div class="row" style="max-width: 230px;">
                        <select name="rating" id="commentRatingFilter">
                            <option value="" selected disabled hidden>Seleccione un valor</option>
                            <option name="rating" value="1">1</option>
                            <option name="rating" value="2">2</option>
                            <option name="rating" value="3">3</option>
                            <option name="rating" value="4">4</option>
                            <option name="rating" value="5">5</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <label for="sorting">Ordenar por:</label>
                    </div>
                    <div class="row" style="max-width: 230px;">
                        <select name="sorting" id="commentSorting">
                            <option value="" selected disabled hidden>Seleccione un valor</option>
                            <option name="sorting" value="id_comment.asc">Antiguedad Ascendente</option>
                            <option name="sorting" value="id_comment.desc">Antiguedad Descendente</option>
                            <option name="sorting" value="rating.asc">Puntaje Ascendente</option>
                            <option name="sorting" value="rating.desc">Puntaje Descendente</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>


        <ul id="lista-tareas" class="list-group" style="max-width: 95%;">
            <p>{{filterError}}</p>
            <li v-for="comment in comments" class="list-group-item" :id=comment.id_comment>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h4>
                                {{comment.email}} | {{comment.rating}} <svg aria-hidden="true" focusable="false"
                                    data-prefix="fas" style="width: 15px;" data-icon="star"
                                    class="svg-inline--fa fa-star fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                            </h4>
                        </div>
                        <div class="col-1">
                            <button v-if="userRole == 1" :id="['deleteButton-' + comment.id_comment]"
                                class="btn btn-danger deleteButton">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd"
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <p>
                        {{comment.message}}
                    </p>
                </div>

            </li>
        </ul>
    </div>
<?php }
}
