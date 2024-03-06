<?php
    /*
    Ejercicio 6 - Imprime por pantalla todas las tablas de multiplicar del 1 al 10 y mostrarlas en una tabla html.
    */
    
    echo '<table border="1" cellspacing="0" cellpadding="15">';
    echo '<tr>';
    for($i = 1; $i <= 10; $i++)
    {
        echo '<td><i>Tabla de multiplicar del '.$i.'</i></td>';
    }
    echo '</tr>';
    echo '<tr>';
    for($i = 1; $i <= 10; $i++)
    {
        for($j = 1; $j <= 10; $j++)
        {
            echo '<td>'.$i.' x '.$j.' = '.$i*$j.'</td>';
        }
        echo '</tr><tr>';
    }
    echo '</tr>';
    echo '</table>';
    
?>