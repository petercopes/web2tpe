<div class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
      <form class="d-flex form-alta" action="{$base}get-filtered-products" method="post">
        <input class="form-control me-2" type="text" placeholder="Palabra Clave" aria-label="Search" name="keyword" id="keywords" value={$keyword}>
        <input class="form-control me-2" type="text" placeholder="Precio Minimo" aria-label="Search"  name="minPrice" id="minPrice" value={$minPrice}>
        <input class="form-control me-2" type="text" placeholder="Precio Maximo" aria-label="Search"  name="maxPrice" id="maxPrice" value={$maxPrice}>
        
        <button class="btn btn-outline-primary" type="submit">Filtrar</button>
      </form>
  </div>
</div>