{include file='templates/header.tpl'}
{include file='templates/nav.tpl'}
<main class="d-flex container-fluid p-5 justify-content-between h-100 flex-xl-column" style="min-height: 85vh;>
    <h1>{$titulo}</h1>
    <div class="card container-fluid d-flex justify-content-evenly p-4" >
        {if $act eq 'add'}
            <form class="form-alta" action="{$base}add-product" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre del Producto</label>
                    <input  type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descripcion</label>
                    <textarea placeholder="descripcion" class="form-control" type="text" name="description" id="description"
                        required> </textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Precio</label>
                    <input  class="form-control" type="number" name="price" id="price" required>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Categoria</label>
                    <select name="categoryId" id="categoryId"  class="form-control">';
                        {foreach from=$categories item=$category}
                            <option value={$category->id_category}>{$category->name}</option>;
                        {/foreach}
                    </select>
                </div>
                <input type="file" name="productImage" accept="image/png, image/jpeg" id="productImage">
                <input type="submit" class="btn btn-primary" value="Añadir">
            </form>

        {else}
            <form class="form-alta" action="{$base}edit-product/{$product->id_product}" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre del Producto</label>
                    <input class="form-control" placeholder="Nombre del producto" type="text" value="{$product->name}" name="name" id="name" required>      
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descripcion</label>
                    <textarea class="form-control" placeholder="descripcion" type="text" name="description" id="description"
                    required>{$product->description}</textarea>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Precio</label>
                    <input  class="form-control"placeholder="precio" type="number" value="{$product->price}" name="price" id="price" required>
                </div>
                <input type="file" name="productImage" accept="image/png, image/jpeg" id="productImage">
                {if $product->image_path}
                    <input type="checkbox" id="delete-image" name="delete-image" default={false}> <label for="cbox2">Borrar imagen</label>
                {/if}
                <input type="submit" class="btn btn-primary" value="Guardar">
            </form>
        {/if}
    </div>
</main>    
{include file='templates/footer.tpl'}