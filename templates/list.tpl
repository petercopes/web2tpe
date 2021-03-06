<main style="min-height: 85vh;>
<div class=" container mt-5">
    <h1>{$titulo}</h1>
    {if not $elements}
    <p>No hay elementos cargados</p>
    {else}
    <div class="mt-3 w-75 center">
        <table class="table">
            <tbody>
                {foreach from=$elements item=$element}
                <tr>
                    <th scope="row">{$element->name}</th>
                    {if $elemType eq "product" && isset($element->category_name)}
                    <td>{$element->category_name}</td>
                    {/if}
                    <td>
                        <div class="d-flex align-items-center justify-content-end">
                            {if $userRole eq 1}
                            <div class="mx-2">
                                <a class="text-secondary" href="edit-{$elemType}-form/{$element->{$idKey}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                </a>
                            </div>
                            <div class="mx-2">
                                <a class="text-secondary" href="remove-{$elemType}/{$element->{$idKey}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-trash" viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                        <path fill-rule="evenodd"
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg>
                                </a>
                            </div>
                            {/if}
                            <div>
                                <a class="mx-2 text-secondary text-decoration-none"
                                    href="{$base}{$elemType}/{$element->$idKey}">Ver M??s</a>
                            </div>
                        </div>
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
    {if $pagination eq true}
    <nav aria-label="Page navigation example" class="center fit-content">
        <ul class="pagination">
            {for $page = 1 to $pageCount}
            {if $minPrice != null || $maxPrice != null || $keyword != null }
            <li class="page-item"><a class="page-link" href="{$base}get-filtered-products?minPrice={$minPrice}&maxPrice={$maxPrice}&keyword={$keyword}&page={$page}">{$page}</a></li>
            {else}
            <li class="page-item"><a class="page-link" href="{$base}products?page={$page}">{$page}</a></li>
            {/if}
            {/for}
        </ul>
    </nav>
    {/if}
    {/if}
    {if $userRole eq 1}
    <div class="btn btn-light">
        <a class="mt-3 text-secondary text-decoration-none" href="{$base}{$elemType}-add-form">{$addText}</a>
    </div>
    {/if}
    </div>

</main>