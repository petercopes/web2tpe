<div class="mt-3 w-75">
    <h2>
        Listado de usuarios
    </h2>
    <table class="table">
        <thead scope="row">
            <tr>
                <td>Username</td>
                <td>Rol</td>
            </tr>
        </thead>
        <tbody>
            {foreach from=$users item=$user}
                <tr>
                    <td>
                        {$user->name}
                    </td>
                    <td>
                        <form class="form-alta" id="userRoleForm" action="{$baseApi}users/{$user->id}" method="put">
                            <select name="rating" id="rating" value={$user->role} class="form-control">'
                                <option value=1>Admin</option>
                                <option value=2>User</option>
                            </select>
                        </form>
                    </td>
                    <td>
                        <div class="text-secondary" id="remove{$elemType}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                <path fill-rule="evenodd"
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                            </svg>
                        </div>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>