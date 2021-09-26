<?php

function showCategories() {

    $categories = array("pantalon", "remera", "calzado");

    echo "<h1>Categorias</h1>";
    echo "<ul>";
    foreach($categories as $category) {
        echo "<li> $category </li>";
    }
    echo "</ul>";
}

?>