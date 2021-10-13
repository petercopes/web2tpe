{include file='templates/header.tpl'}
{include file='templates/nav.tpl'}

<main class="d-flex container-fluid p-5 justify-content-between h-100 flex-xl-column">
    <a href="{$base}categories" class="card-link text-secondary text-decoration-none mb-1">Volver</a>
    <div class="card container-fluid d-flex justify-content-evenly">
        <div class="card-body">
            <h1 class="card-title mb-3">{$category->name}</h1>
            <h2 class="card-subtitle mb-2 text-muted">Acerca de esta Categoria:</h2>
            <p>{$category->description}</p>

            {include file="templates/list.tpl"}
        </div>
    </div>

</main>
{include file='templates/footer.tpl'}