<?php
    //Crea un script en PHP que tenga 4 variables, una de tipo array, otra de tipo string, otra int y otra booleana.
    //Imprime un mensaje según el tipo de variable que sea. 

    $array = array();
    $string = 'Hola, soy un string';
    $int = 0;
    $boolean = true;

    identifyType($array);
    echo '<br>';
    identifyType($string);
    echo '<br>';
    identifyType($int);
    echo '<br>';
    identifyType($boolean);




    function identifyType($variable)
    {
        if (is_array($variable))
        {
            echo 'Es un array';
        } else if (is_bool($variable)) {
            echo 'Es un boolean';
        } else if (is_int($variable)){
            echo 'Es un int';
        } else {
            echo 'Es un string';
        }
    }

?>