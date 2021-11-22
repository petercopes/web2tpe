{include file='templates/header.tpl'}
{include file='templates/nav.tpl'}
<main class="d-flex container-fluid p-5 justify-content-between h-100 flex-xl-column" style="min-height: 85vh;>
    <h1>{$titulo}</h1>
    <div class="card container-fluid d-flex justify-content-evenly p-4">
        {if $action eq "add"}
            <form class="form-alta" action="{$base}add-category" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre de la Categoria</label>
                    <input placeholder="Nombre" type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Nombre de la Categoria</label>
                    <textarea placeholder="Descripcion" type="text" name="description" class="form-control"
                        id="description"></textarea>
                </div>
                <input class="btn btn-primary" type="submit" value="Guardar">
            </form>
        {else}
            <form class="form-alta" action="{$base}edit-category/{$category->id_category}" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre de la Categoria</label>
                <input placeholder="Nombre" type="text" name="name" id="name" class="form-control"
                    value="{$category->name}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Nombre de la Categoria</label>
                <textarea placeholder="Descripcion" type="text" name="description" class="form-control"
                    id="description">{$category->description}</textarea>
            </div>
            <input class="btn btn-primary" type="submit" value="Guardar">
            </form>
        {/if}
    </div>
</main>

{include file='templates/footer.tpl'}