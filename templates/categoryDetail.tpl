{include file="templates/nav.tpl"}
<div>
    <h2>{$category->name}</h2>
    <h3>Acerca de esta categoria:</h3>
    <p>{$category->description}</p>
    {include file="templates/list.tpl"}
</div>