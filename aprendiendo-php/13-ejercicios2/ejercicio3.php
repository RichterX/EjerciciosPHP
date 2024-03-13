<?php
    //Crea un programa que compruebe si una variable está vacía. En caso de que así sea, rellenarla con texto en minúscula pero mostrarlo
    //en mayúscula.

    $variable = '';

    if (empty($variable))
    {
        echo 'La variable esta vacia, rellenando y mostrando...<br>';
        $variable = 'texto de relleno';
        echo strtoupper($variable);
    } else {
        echo 'La variable no esta vacia<br>';
        echo strtoupper($variable);
    }


?>