<?php

function showProducts() {

    $products = array("jean roturas", "remera algodon roja", "zapatillas deportivas");

    echo "<h1>Productos</h1>";
    echo "<ul>";
    foreach($products as $product) {
        echo "<li> $product </li>";
    }
    echo "</ul>";
}

?>