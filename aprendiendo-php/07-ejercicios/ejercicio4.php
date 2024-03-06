<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 4</title>
    </head>
    <body>
        <h1>Ejercicio 4</h1>
        <form method="GET" action="ejercicio4.php">
            <p>
                Introduce el primer numero: <input type="text" name="num1" id="num1">
                Introduce el segundo numero: <input type="text" name="num2" id="num2">
                <input type="submit" value="¡Mostrar!">
            </p>
        </form>

        <?php
                /* Ejercicio 4 - Recoge 2 números a través de una web (con GET) y muestra las operaciones básicas de una 
                calculadora (suma, resta, multiplicación y división). */

                if(!isset($_GET['num1']) && !isset($_GET['num2'])){
                    echo 'Introduce un valor para num1 y num2';
                } else {
                    $num1 = $_GET['num1'];
                    $num2 = $_GET['num2'];

                    echo 'SUMA '. ($num1 + $num2).'<br>';
                    echo 'RESTA '. ($num1 - $num2).'<br>';
                    echo 'MULTIPLICACIÓN '. ($num1 * $num2).'<br>';
                    echo 'DIVISIÓN '. ($num1 / $num2).'<br>';
                }
            ?>
    </body>
</html>



