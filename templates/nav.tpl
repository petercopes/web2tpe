<nav class="navbar  navbar-dark bg-dark justify-content-start">
    <ul class=' navbar-nav flex-row '>
        <li class='nav-item m-2'><a class='nav-link' href="{$base}home">Home</a></li>
        <li class='nav-item m-2'><a class='nav-link' href="{$base}products">Productos</a></li>
        <li class='nav-item m-2'><a class='nav-link' href="{$base}categories">Categorias</a></li>
        {if !empty($userRole) && $userRole !== 3}
            <li class='nav-item m-2'><a class='nav-link' href="{$base}logout">Log Out</a></li>
        {else}
            <li class='nav-item m-2'><a class='nav-link' href="{$base}login">Log In</a></li>
        {/if}
        {if $userRole eq "1"}
            <li class='nav-item m-2'><a class='nav-link' href="{$base}backoffice">Back Office</a></li>
        {/if}
    </ul>
</nav>