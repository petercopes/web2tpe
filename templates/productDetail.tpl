{include file='templates/header.tpl'}
{include file='templates/nav.tpl'}
<main class="d-flex container-fluid p-5 justify-content-between h-100 flex-column" style="min-height: 85vh;">
    <a href="{$base}products" class="card-link text-secondary text-decoration-none mb-1">Volver</a>
    <div class="card mb-3 center" style="max-width: 700px; width: 90%;">
        <div class="row g-0">
            {if !empty($product->image_path)}
                <div class="col-md-4">
                    <img src="{$product->image_path}" class="card-img-top" alt="{$product->name}-img">
                </div>
            {/if}
            <div class="col">
                <div class="card-body">
                    <h5 class="card-title">{$product->name}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{$product->price}</h6>
                    <p class="card-text">{$product->description}</p>
                    {if $userRole eq '1'}
                        <div class="container-fluid d-flex justify-content-evenly flex-row" style="margin-top: 130px;">
                            <a href="edit-product-form/{$product->id_product}" class=" card-link btn btn-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </a>
                            <a href="remove-product/{$product->id_product}" class="btn btn-danger card-link">
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
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="card container-fluid d-flex justify-content-evenly center" id="commentsContainer" user-role={$userRole}
        product-id={$product->id_product} style="max-width: 700px;">
        {include file="templates/commentList.tpl"}
        {if $userRole eq '2'}
            {include file="templates/commentForm.tpl"}
        {/if}
    </div>
</main>
<script src='js/comments.js'></script>
{include file='templates/footer.tpl'}