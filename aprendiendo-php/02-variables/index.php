<!DOCTYPE HTML>
<html>

    <head>
        <meta charset="utf-8">
        <title>Master en PHP - Variables</title>
    </head>

    <body>
        <h1>Master en PHP</h1>
        <?php
            $nombre = 'Pedro';
            $apellidos = 'Luque';
            $edad = 25;
            $esViejo = false;
            $edadReal = $edad+14;

            if ($edad > 40) {
                $esViejo = true;
            } else {
                $esViejo = false;
            }

            echo 'Hola, ' . $nombre . ' ' . $apellidos . '! Sé que tienes ' . $edadReal . ' años.';

            if ($esViejo) {
                echo '<p>Veo que además te sientes viejo</p>';
            } else {
                echo '<p>¡Pero estás hecho un chaval!</p>';
            }

            echo "Cuando imprimo con comillas dobles, puedo insertar variables: $nombre $apellidos";

            // Tipos de datos
            $numero = 10;
            $decimal = 10.5;
            $booleano = true; // o false. Si lo imprimiésemos con echo, mostraría 1 o 0
            $nulo = null;
            $cadena = 'Master en PHP';
            //Añadiríamos también los arrays o colecciones de datos y los objetos

            //Ejemplo de array
            $array = array(1, 2, 3, 4, 5);
            //Añadiríamos más datos
            $array[] = 6;
            $array[] = 7;
            $array[] = 8;
            //Recorremos y mostramos el array
            foreach ($array as $valor) {
                echo $valor . '<br />';
            }
            echo 'El array tiene ' . count($array) . ' elementos actualmente.';
            //Eliminamos un elemento
            unset($array[1]);
            echo '<br />';
            foreach ($array as $valor) {
                echo $valor . '<br />';
            }

            //Obtenemos el tipo de dato de cualquier variable con gettype.
            echo gettype($array).'<br/>';
            echo gettype($numero).'<br/>';
            echo gettype($decimal).'<br/>';
            echo gettype($booleano).'<br/>';
            echo gettype($nulo).'<br/>';
            echo gettype($cadena).'<br/>';

            //Con esta función, podemos debugear una variable, mostrando el archivo desde el que se llama, su contenido y el tipo de dato de la variable.
            var_dump($cadena);


            //Constantes - No podemos cambiar su valor. Funcionan como un diccionario clave-valor.
            define('PI', 3.1416);
            echo '<br /><br />El valor de PI es ' . PI. '<br />';

            //Constantes predefinidas
            echo 'Versión de PHP: '.PHP_VERSION.'<br />'; //Nos muestra la versión de PHP
            echo 'Sistema operativo: '.PHP_OS.'<br />'; //Nos muestra el sistema operativo
            echo 'Tamaño de enteros: '.PHP_INT_SIZE.'<br />'; //Nos muestra el tamaño de enteros
            echo 'Ruta de las extensiones'.PHP_EXTENSION_DIR.'<br />'; //Nos muestra la ruta de las extensiones
            echo 'Nos encontramos en la línea ' . __LINE__ . '<br />'; //Nos muestra la línea actual del código en el que se encuentra.
            echo __FILE__ . '<br />'; //Nos muestra la ruta del fichero actual.
            echo __DIR__ . '<br />'; //Nos muestra la ruta del directorio actual.
            


        
        ?>
    </body>
</html>