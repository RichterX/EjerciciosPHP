<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 5</title>
    </head>
    <body>
        <h1>Ejercicio 5</h1>
        <form method="GET" action="ejercicio5.php">
            <p>
                Introduce el primer numero: <input type="text" name="num1" id="num1">
                Introduce el segundo numero: <input type="text" name="num2" id="num2">
                <input type="submit" value="¡Mostrar!">
            </p>
        </form>
        <?php
            /*
            Ejercicio 5 - Muestra todos los números entre dos números introducidos en un formulario web.
            */

            if(!isset($_GET['num1']) && !isset($_GET['num2'])){
                echo 'Introduce un valor para num1 y num2';
            } else {
                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];

                for($i = $num1; $i <= $num2; $i++){
                    echo $i.'<br>';
                }
            }
        ?>
    </body>
</html>