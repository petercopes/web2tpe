{include file='templates/header.tpl'}
{include file='templates/nav.tpl'}
<main class="d-flex container-fluid p-5 justify-content-between h-100 flex-xl-column">
    <a href="{$base}products" class="card-link">Volver</a>
    <div class="card container-fluid d-flex justify-content-evenly" >
        <div class="card-body">
        <h2 class="card-title">{$product->name}</h2>
        <h3 class="card-subtitle mb-2 text-muted">{$product->price}</h3>
        <p class="card-text">{$product->description}</p>
        {if $isUserLogged eq true}
            <div class="container-fluid d-flex justify-content-evenly flex-row">
                <a href="edit-product-form/{$product->id_product}" class=" card-link btn btn-dark"> Editar</a>
                <a href="remove-product/{$product->id_product}" class="btn btn-danger card-link">X</a>
            </div>
            
        {/if}
        </div>
    </div>
    
</main>
{include file='templates/footer.tpl'}
