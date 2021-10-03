{include file='templates/header.tpl'}
{include file='templates/nav.tpl'}
<h2>{$titulo}</h2>
{if $act eq 'add'}
    <form class="form-alta" action="{$base}add-product" method="post">
        <input placeholder="Nombre del producto" type="text" name="name" id="name" required>
        <textarea placeholder="descripcion" type="text" name="description" id="description" required> </textarea>
        <input placeholder="precio" type="number" name="price" id="price" required>
    <select name="categoryId" id="categoryId">';
        {foreach from=$categories item=$category}
        <option value={$category->id_category}>{$category->name}</option>;
        {/foreach}
    </select>
    <input type="submit" class="btn btn-primary" value="Añadir">
</form>
{else}
<form class="form-alta" action="{$base}edit-product/{$product->id_product}" method="post">
    <input placeholder="Nombre del producto" type="text" value="{$product->name}" name="name" id="name" required>
    <textarea placeholder="descripcion" type="text" name="description" id="description"
        required>{$product->description}</textarea>
    <input placeholder="precio" type="number" value="{$product->price}" name="price" id="price" required>
    <input type="submit" class="btn btn-primary" value="Guardar">
</form>
{/if}
{include file='templates/footer.tpl'}