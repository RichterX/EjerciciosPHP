<?php
    /*
        Crea una array con el contenido de la siguiente tabla:
        ACCION  AVENTURA            DEPORTES
        GTA     ASSASSINS´S CREED   FIFA 19
        COD     CRASH BANDICOOT     PES 19
        PUBG    PRINCE OF PERSIA    MOTOGP 19

        A continuación, muéstralos en HTML en una tabla recogiendo los datos de esta array. Cada fila debe ir en un archivo
    */

    //Primero creamos el array
    $videogames = array(
        array('ACCION', 'AVENTURA', 'DEPORTES'),
        array('GTA', 'ASSASSINS\'S CREED', 'FIFA 19'),
        array('COD', 'CRASH BANDICOOT', 'PES 19'),
        array('PUBG', 'PRINCE OF PERSIA', 'MOTOGP 19')
    );
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 5</title>
    </head>
    <body>
        <h1>Ejercicio 5</h1>
        <p><h3>Mostramos en HTML el contenido de la tabla creada</h3></p>
        <br/>
        <table class="default" border="1" >
            <caption><b><i>Videogames</i></b></caption>
            <?php require_once 'cabecera.php'; ?>
            <?php require_once 'firstRow.php'; ?>
            <?php require_once 'secondRow.php'; ?>
            <?php require_once 'thirdRow.php'; ?>
        </table>
    </body>
</html>

