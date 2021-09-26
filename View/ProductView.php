<?php

class ProductView
{

    function showProducts($products)
    {
        echo "<h1>Productos</h1>";
        echo "<ul>";
        foreach ($products as $product) {
            echo "<li> $product->name </li>";
        }
        echo "</ul>";
    }

}
