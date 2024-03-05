<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Master en PHP - Estructuras de control</title>
    </head>
    <body>
        <h1>Master en PHP - Estructuras de control</h1>
        <!-- Creamos un formulario de prueba -->
        <?php
        //Estructuras de control
        //Estructura if

        $nombre = 'Pedro';
        $edad = 12;

        if($edad >= 18 && $edad < 59){
            echo $nombre.', eres mayor de edad';
        } else if ($edad < 100 && $edad > 60){ 
            echo $nombre.', eres anciano';
        } else {
            echo $nombre.', eres muy jóven!';
        }

        //Estructura switch
        $dia = date('N');

        switch($dia){
            case 1: echo 'Lunes';
            break;
            case 2: echo 'Martes';
            break;
            case 3: echo 'Miercoles';
            break;
            case 4: echo 'Jueves';
            break;
            case 5: echo 'Viernes';
            break;
            case 6: echo 'Sabado';
            break;
            case 7: echo 'Domingo';
            break;
            default: echo 'No es un dia de la semana';
            break;
        }

        ?>
    </body>
</html>