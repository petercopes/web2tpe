{include file='templates/header.tpl'}
{include file='templates/nav.tpl'}
<main class="d-flex container-fluid p-5 justify-content-between h-100 flex-xl-column">
    <h1>{$titulo}</h1>
    <div class="card container-fluid d-flex justify-content-evenly p-4 mb-4">
        {if $action === 'create-user'}
            </form>

            <form class="form-login" action="{$base}create-user" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input placeholder="Email" type="text" name="email" id="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input placeholder="Contraseña" type="password" name="password" id="password" class="form-control"
                        required>
                </div>
                <input type="submit" class="btn btn-primary" value="Crear">
            </form>
        {else}

            <form class="form-login" action="{$base}verify-user" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input placeholder="Email" type="text" name="email" id="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input placeholder="Contraseña" type="password" name="password" id="password" class="form-control"
                        required>
                </div>
                <input type="submit" class="btn btn-primary" value="Log In">
            </form>

            <p class="my-2">No estas registrado? <a class="text-secondary text-decoration-none" href="{$base}create-user-form">Crear usuario</a> </p>
        {/if}
    </div>
    {if $showAlert eq true}
        {include file='templates/alert.tpl'}
    {/if}
</main>

{include file='templates/footer.tpl'}