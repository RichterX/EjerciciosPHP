<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 7</title>
    </head>
    <body>
        <h1>Ejercicio 7</h1>
        <form method="GET" action="ejercicio7.php">
            <p>
                Introduce el primer numero: <input type="text" name="num1" id="num1">
                Introduce el segundo numero: <input type="text" name="num2" id="num2">
                <input type="submit" value="¡Mostrar!">
            </p>
        </form>
        <?php
            /*
            Ejercicio 7 - Muestra todos los números impares entre dos números introducidos en un formulario web.
            */

            if(!isset($_GET['num1']) && !isset($_GET['num2'])){
                echo 'Introduce un valor para num1 y num2';
            } else {
                $num1 = $_GET['num1'];
                $num2 = $_GET['num2'];

                for($i = $num1; $i <= $num2; $i++)
                {
                    if($i%2 != 0)
                    {
                        echo $i.'<br>';
                    }
                }
            }
        ?>
    </body>
</html>