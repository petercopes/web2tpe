<?php

class CategoryView
{

    function showCategories($categories)
    {
        echo "<h1>Categorias</h1>";
        echo "<ul>";
        foreach ($categories as $category) {
            echo "<li> $category->name </li>";
        }
        echo "</ul>";
    }

}
