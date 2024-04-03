<?php

    //Recojemos los datos del formulario mediante POST

    if(isset($_POST['name']))
    {
        echo $_POST['name'].' ';
    }

    if(isset($_POST['surname']))
    {
        echo $_POST['surname'];
    }

    echo '<br/>';

    //Recojemos el valor de un checkbox
    if(isset($_POST['casado'])) //Si existe...
    {
        $casado = $_POST['casado']; //Guardamos en una variable
        if ($casado) //Si es true
        {
            echo 'Estas casado';
        } else {
            echo 'No estas casado'; //Si es false
        }
    }

    echo '<br/>';

    //Recojemos el valor de un radio
    if(isset($_POST['sexo']))
    {
        $sexo = $_POST['sexo']; //Guardamos en una variable
        echo $sexo;
    }

