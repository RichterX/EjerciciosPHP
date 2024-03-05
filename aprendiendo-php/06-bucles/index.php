<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Master en PHP - Bucles</title>
    </head>
    <body>
        <h1>Master en PHP - Bucles</h1>
        <?php
            //BUCLES
            //Estructura while
            echo 'Bucle While<br>';
            $i = 0;

            while($i <= 10){
                echo $i.'<br>';
                $i++;
            }
            echo '<br>';

            //Estructura for

            echo 'Bucle For<br>';
            for($i = 0; $i <= 10; $i++){
                echo $i.'<br>';
            }
            echo '<br>';

            //Estructura foreach
            
            echo 'Bucle Foreach<br>';
            $colores = ['rojo', 'azul', 'verde', 'amarillo'];

            foreach($colores as $color){
                echo $color.'<br>';
            }
            echo '<br>';

            //Estructura do-while

            echo 'Bucle Do-While<br>';
            $i = 0;

            do{
                echo $i;
                $i++;
            } while($i <= 10);
            echo '<br>';
            echo '<br>';

            //Pequeño ejercicio que imprime un cuadrado de asteriscos de 10 filas por 10 columnas usando dos for anidados
            echo 'Pequeño ejercicio que imprime un cuadrado de asteriscos de 10 filas por 10 columnas usando dos for anidados<br>';
            for($n = 0 ; $n <10 ; $n++){
                for($m = 0 ; $m <10 ; $m++){
                    echo '*';
                }
                echo '<br>';
            }

        ?>
    </body>
</html>