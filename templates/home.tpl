{include file='templates/header.tpl'}
{include file='templates/nav.tpl'}
<main class="d-flex container-fluid p-5 justify-content-between h-100  flex-xl-column" style="min-height: 85vh;">
    <section class="container flex center text-center">
        <h1>Bienvenido al catalogo de La Femme!</h1>
        <h2>
            En este sitio encontraras el stock de productos de nuestra marca.
            Todos ellos se encuentran actualmente en stock y pueden ser enviados para su reventa!
            Para mas información podes comunicarte con nostros a traves de nuestros canales de contacto.
        </h2>
    </section>
</main>
{if $showAlert eq true}
    {include file='templates/alert.tpl'}
{/if}
{include file='templates/footer.tpl'}