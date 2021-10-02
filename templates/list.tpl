{include file='templates/header.tpl'}
{include file='templates/nav.tpl'}
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
            <h1>{$titulo}</h1>
            <ul class="list-group">
                {foreach from=$elements item=$element}
                    <li class="
                        list-group-item">
                            <p>{$element->name} <span><a href="remove-{$elemType}/{$element->{$idKey}}">X</a><a href="edit-{$elemType}-form/{$element->{$idKey}}"> Editar</a> </span></p>
                    </li>
                {/foreach}
            </ul>
        </div>
    </div>

</div>

{include file='templates/footer.tpl'}