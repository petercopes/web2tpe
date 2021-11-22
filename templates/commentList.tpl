
    <div id="app">
        <ul id="lista-tareas" class="list-group">
            
        </ul>
        <div v-if="userRole == '2'" class="comment-form container" id="commentsFormContainer">
            {include file="templates/commentForm.tpl"}
        </div>

    </div>
