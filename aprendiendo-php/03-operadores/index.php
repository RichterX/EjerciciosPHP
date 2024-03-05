<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Master en PHP - Operadores</title>
    </head>
    <body>
        <h1>Master en PHP</h1>

        <?php
            //Operadores aritméticos
            $numero = 10;
            $decimal = 10.5;

            echo $numero + $decimal;
            echo '<br />';
            echo $numero - $decimal;
            echo '<br />';
            echo $numero * $decimal;
            echo '<br />';
            echo $numero / $decimal;
            echo '<br />';
            echo $numero % $decimal; //Resto
            echo '<br />';

            //Operadores de comparación
            echo $numero == $decimal; //Igualdad
            echo '<br />';
            echo $numero === $decimal; //Igualdad estricta, significa que el valor y el tipo de dato son iguales
            echo '<br />';
            echo $numero != $decimal; //Distinto de
            echo '<br />';
            echo $numero <> $decimal; //Distinto estricto, significa que el valor o el tipo de dato son distintos
            echo '<br />';
            echo $numero !== $decimal; //Distinto estricto, significa que el valor o el tipo de dato son distintos
            echo '<br />';

            //Operadores lógicos
            echo $numero > $decimal; //Mayor que
            echo '<br />';
            echo $numero < $decimal; //Menor que
            echo '<br />';
            echo $numero >= $decimal; //Mayor o igual que
            echo '<br />';
            echo $numero <= $decimal; //Menor o igual que
            echo '<br />';

            //Operadores de incremento y decremento
            $numero++;
            echo $numero;
            echo '<br />';
            $numero--;
            echo $numero;
            echo '<br />';
            echo $numero++;
            echo '<br />';
            echo $numero--;
            echo '<br />';

            //Operadores de asignación
            $numero = 10;
            $decimal = 10.5;
            $numero += 5; // Es lo mismo que $numero = $numero + 5


        ?>

    </body>
</html>