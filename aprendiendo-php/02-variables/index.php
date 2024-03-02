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

            // Tipos de datos
            $numero = 10;
            $decimal = 10.5;
            $booleano = true;
            $nulo = null;
            $cadena = 'Master en PHP';

        ?>
    </body>
</html>