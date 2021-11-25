<div class="container p-3 card" style="max-width: 90%;">
    <h3>Agregar un Comentario</h3>
    <form class="form-alta" id="commentForm" action="{$base}/api/comments" method="POST">
        <div class="mb-3">
            <input  hidden type="email" name="email" id="email" value={$email}>
            <input  hidden type="number" name="id_product" id="idProductForm" value={$product->id_product}>
        </div>
        <div class="form-floating mb-3">
            <input placeholder="Deja un comentario" type="text" name="message" id="message" class="form-control" required>
            <label for="message">Deja un comentario</label>
        </div>
        <div class="mb-3">
            <label for="rating">Puntaje</label>
            <select name="rating" id="rating" class="form-control" required>
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=5>5</option>
            </select>
        </div>

        <input class="btn btn-primary" type="submit" value="Guardar">
    </form>
</div>
