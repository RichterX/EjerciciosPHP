<?php
    /*Funciones predefinidas de PHP*/

    $nombre = "Pedro";
    var_dump($nombre); //Devuelve el tipo de dato y el valor de la variable

    echo date('d/m/Y'); //Devuelve la fecha actual. Día y mes puedes colocarlo en mayúsculas para que lo devuelva en letra (en inglés)
                        //También puedes cambiar el orden a m/d/y o y/m/d. Más info https://www.php.net/manual/es/function.date

    echo '<br/>';
    echo time(); //Devuelve el timestamp de la fecha actual

    //OPERACIONES MATEMÁTICAS
    echo "Raiz cuadrada de 9: ".sqrt(9);
    echo "<br/>";

    //Redondeo de decimales
    echo "Redondear a 2 decimales: ".round(3.1415926535, 2);
    echo "<br/>";

    //Redondeo hacia arriba
    echo "Redondear hacia arriba: ".ceil(3.1415926535);
    echo "<br/>";

    //Redondeo hacia abajo
    echo "Redondear hacia abajo: ".floor(3.1415926535);
    echo "<br/>";

    //Número aleatorio
    echo "Número aleatorio entre 0 y 10: ".rand(0, 10);
    echo "<br/>";

    //Generar una cadena aleatoria
    echo "Cadena aleatoria: ".bin2hex(random_bytes(10));
    echo "<br/>";

    //Número PI
    echo "Número PI: ".pi();
    echo "<br/>";
    
    //Saber la longitud de una cadena
    $cadena ='¡Esto es una cadena de texto!';
    echo "Longitud de la cadena: ".strlen($cadena);
    echo "<br/>";

    //Saber el tipo de dato de una variable
    $nombre = "Pedro";
    $edad = 25;
    echo gettype($nombre);
    echo "<br/>";
    echo gettype($edad);
    echo "<br/>";

    //Funciones que devuelven un booleano para saber si es un tipo de dato concreto
    if(is_int($nombre)){
        echo "Es un entero";
        echo "<br/>";
    } else {
        echo "Es de tipo " .gettype($nombre);
        echo "<br/>";
    }

    if(is_int($edad)){
        echo "Es un entero";
        echo "<br/>";
    } else {
        echo "Es de tipo " .gettype($edad);
        echo "<br/>";
    }

    //Averiguar si una variable existe dentro de nuestro programa
    if(isset($nombre)){
        echo "La variable existe";
        echo "<br/>";
    } else {
        echo "La variable no existe";
        echo "<br/>";
    }

    //Función que elimina todos los espacios de una cadena por delante y detrás.
    $nombre = " Pedro es muy paquete ";
    echo trim($nombre);
    echo "<br/>";

    //Eliminar variables o índices de arrays
    $enemigo = "Pedro";
    unset($enemigo); //Elimina del código la variable $enemigo y su contenido.

    //Función para comprobar si una variable está vacía, o su contenido es cero o NULL.
    if(empty($nombre)){
        echo "La variable no tiene contenido";
        echo "<br/>";
    } else {
        echo "La variable tiene contenido";
        echo "<br/>";
    }



?>