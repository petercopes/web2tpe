<?php
    function showHome() {
        echo '
        <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Mi Tienda</title>
            </head>

            <body>
            <h1>Mi tienda</h1>
                <nav>
                    <ul>
                        <li>
                            <a href="products">Productos</a>
                        </li>
                        <li>
                            <a href="categories">Categorias</a>
                        </li>
                    </ul>
                </nav>
            </body>

        </html>
        ';
    }

?>