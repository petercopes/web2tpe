<nav>
    <ul>
        <li><a href="{$base}home">Home</a></li>
        <li><a href="{$base}products">Productos</a></li>
        <li><a href="{$base}categories">Categorias</a></li>
        {if $isUserLogged eq true}
            <li><a href="{$base}admin-actions">Admin actions</a></li>
            <li><a href="{$base}logout">Log Out</a></li>
        {else}
            <li><a href="{$base}login">Log In</a></li>
        {/if}
    </ul>
</nav>