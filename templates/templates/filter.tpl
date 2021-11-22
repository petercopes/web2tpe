
<div class="card container-fluid d-flex justify-content-evenly p-4">
    <form class="form-alta" action="{$base}get-filtered-products" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Palabra Clave</label>
            <input placeholder="Nombre" type="text" name="keywords" id="keywords" class="form-control">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Min Precio</label>
            <input  type="number" name="minPrince" id="minPrice" class="form-control">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Max Precio</label>
            <input  type="number" name="maxPrice" id="maxPrice" class="form-control">
        </div>
        <input class="btn btn-primary" type="submit" value="Guardar">
    </form>
</div>