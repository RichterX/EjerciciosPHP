<?php
    //Crea un array e introduce valores continuamente hasta que su longitud sea de 120 elementos. Después, muéstralos por pantalla
    $numeros = array();
    $index = 0;

    for ($i = 0 ; $i < 120 ; $i++)
    {
        $randomNumber = rand(1, 100);
        array_push($numeros, $randomNumber);
    }

    foreach ($numeros as $num)
    {
        $index++;
        echo $index.'. '.$num.' '.'<br>';
    }
?>



