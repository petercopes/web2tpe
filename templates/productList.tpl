{include file='templates/header.tpl'}
{include file='templates/nav.tpl'}
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
            <h1>{$titulo}</h1>
            <ul class="list-group">
                {foreach from=$products item=$product}
                    <li class="
                        list-group-item">
                            <p>{$product->name} <span><a href='remove-product/{$product->id_product}'>X</a><a href='edit-product-form/{$product->id_product}'> Editar</a> </span></p>
                    </li>
                {/foreach}
            </ul>
        </div>
    </div>

</div>

{include file='templates/footer.tpl'}