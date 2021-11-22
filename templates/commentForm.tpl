{literal}
    <form class="form-alta" id="commentForm" action="{$baseApi}comments" method="post">
        <div class="mb-3">
            <input placeholder="Deja un comentario" type="text" name="message" id="message" class="form-control" required>
        </div>
        <div class="mb-3">
            <input placeholder="Nombre" type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <select name="rating" id="rating" class="form-control">'
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=5>5</option>
            </select>
        </div>

        <input class="btn btn-primary" type="submit" value="Guardar">
    </form>
{/literal}