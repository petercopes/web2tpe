{include file='templates/header.tpl'}
{include file='templates/nav.tpl'}
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
            <h1>{$titulo}</h1>
            {if $action eq "add"}
                <form class="form-alta" action="add-category" method="post">
                    <input placeholder="nombre" type="text" name="name" id="name" required>
                    <textarea placeholder="descripcion" type="text" name="description" id="description"> </textarea>
                    <input type="submit" value="Guardar">
                </form>
            {else}
                <form class="form-alta" action="{$base}edit-category/{$category->id_category}" method="post">
                    <input type="text" name="name" id="name" value="{$category->name}" required>
                    <textarea type="text" name="description" id="description">{$category->description}</textarea>
                    <input type="submit" value="Guardar">
                </form>
            {/if}
            </div>
        </div>

    </div>

    {include file='templates/footer.tpl'}