<?php
    //Variables locales

    //Las variables tienen ámbito local por defecto, a menos que lo especifiquemos con global

    $num1 = 10;

    echo $num1; //Esto imprimirá el valor de $num1 sin problema.

    /*
    function muestra(){
        echo $num1; //Esto imprimira un error ya que $num1 no existe dentro de la función. En Java y similares sí funciona, pero en PHP NO!
    }

    muestra(); //Dará Error.
    */
    //Para que se muestre correctamente dentro de la función, debemos hacer la variable global con la palabra reservada global.

    function muestra2(){
        global $num1;
        echo $num1; //esto SI funcionará.
    }
    muestra2();

    //Funciones Variables
    //Esto es un poco loco. Puedes definir una función cualquiera, como por ejemplo la siguiente:

    function saludar(){
        return 'Hola';
    }

    //Ahora nos definimos una variable con el nombre de la función (sin los paréntesis);

    $saludo = "saludar";

    //Ahora imprimimos la función con el nombre de la variable;

    echo $saludo();

    //Hemos transformado la función en una variable...

?>