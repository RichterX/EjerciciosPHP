<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Imprimir por pantalla - Master en PHP</title>
    </head>
    <body>
        <h1>Master en PHP</h1>

        <?php

            // Imprimir por pantalla
            echo '<h3>Listado de videojuegos</h3>';

            // Concatenaciones de texto
            echo '<ul>'
            .'<li>Super Mario</li>'
            .'<li>Mario Kart</li>'
            .'<li>Pokemon</li>'
            .'<li>Metroid</li>'
            .'</ul>';

            /*
            Se pueden crear comentarios multilínea
            como en Java y otros lenguajes
            */

            echo '<p>Esta es toda mi colección de videojuegos</p>';
        ?>

        <?= 'Esto es un atajo de echo, pero ojo! se llama desde fuera de la etiqueta php!'?>

    </body>
</html>


