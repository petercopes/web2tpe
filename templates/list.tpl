
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
            <h1>{$title}</h1>
            <ul class="list-group">
                {foreach from=$elements item=$element}
                    <li class="
                        list-group-item">
                            <p>{$element->name} <span><a href="remove-{$elemType}/{$element->{$idKey}}">X</a><a href="edit-{$elemType}-form/{$element->{$idKey}}"> Editar</a> <a href="{$base}{$elemType}/{$element->$idKey}">Ver Más</a></span></p>
                    </li>
                {/foreach}
            </ul>
        </div>
    </div>

</div>
