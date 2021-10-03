{include file='templates/header.tpl'}
{include file='templates/nav.tpl'}
<h2>{$titulo}</h2>
{if $action === 'create-user'}
    <form class="form-login" action="create-user" method="post">
        <input placeholder="usuario" type="text" name="email" id="email" required>
        <input placeholder="contraseña" type="text" name="password" id="password" required>
        <input type="submit" value="Crear">
    </form>
{else}
    <form class="form-login" action="verify-user" method="post">
        <input placeholder="usuario" type="text" name="email" id="email" required>
        <input placeholder="contraseña" type="text" name="password" id="password" required>
        <input type="submit" value="Log in">
    </form>

    <li><a href="{$base}create-user-form">Crear usuario</a></li>
{/if}

<h4>{$message}</h4>

{include file='templates/footer.tpl'}