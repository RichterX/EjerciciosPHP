<?php
    //Crea un programa que contenga un array con 8 números y hacer lo siguiente:
    // - Mostrar el array
    // - Ordenar el array y mostrarlo
    // - Mostrar su longitud
    // - Buscar un elemento en el array

    $numeros = array(8, 7, 9, 1, 3, 5, 2, 10, 4, 6);

    echo 'Mostramos el array: <br>';
    mostrarArray($numeros);
    echo '<br><br>';

    echo 'Ordenamos el array y lo mostramos: <br>';
    sort($numeros);
    mostrarArray($numeros);
    echo '<br><br>';

    echo 'Mostramos su longitud: <br>';
    echo count($numeros);
    echo '<br><br>';

    echo 'Buscamos un elemento en el array (por ejemplo, el número 4): <br>';
    if (in_array(4, $numeros))
    {
        echo 'El 4 existe en el array';
    } else {
        echo 'El 4 no existe en el array';
    }
    echo '<br><br>';

    echo 'También se puede hacer con el array_search(). Buscamos el 12: <br>';
    if (array_search(12, $numeros))
    {
        echo 'El 12 existe en el array';
    } else {
        echo 'El 12 no existe en el array';
    }
    

    function mostrarArray($array)
    {
        for ($i = 0; $i < count($array); $i++)
        {
            echo $array[$i].'<br>';
        }
    }
?>