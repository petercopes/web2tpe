{include file='templates/header.tpl'}
{include file='templates/nav.tpl'}
<main class="d-flex container-fluid p-5 justify-content-between h-100 flex-xl-column">
    <section class="container flex center text-center">
        <h1>Listado de usuarios</h1>
        <table>
            <thead>
                <tr>
                    <td>
                        Nombre
                    </td>
                    <td>
                        Permisos
                    </td>
                    <td>

                    </td>
                </tr>
            </thead>
            <tbody>
                {foreach from=$users item=$user}
                    <tr>
                        <td>
                            {$user->name}
                        </td>
                        <td>
                            {if $user->hasPermission}
                                <input type="checkbox" value="true">
                            {else}
                                <input type="checkbox" value="false">
                            {/if}
                        </td>
                        <td>
                            <a class="text-secondary" href="remove-user/{$user->id}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd"
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </section>
</main>
{include file='templates/footer.tpl'}