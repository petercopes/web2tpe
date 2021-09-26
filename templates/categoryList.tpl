{include file='templates/header.tpl'}

<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
            <h1>{$titulo}</h1>

            <ul class="list-group">
                {foreach from=$categories item=$category}
                    <li class="
                        list-group-item">
                            {$category->name}      
                    </li>
                {/foreach}
            </ul>
        </div>
    </div>

</div>

{include file='templates/footer.tpl'}