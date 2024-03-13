<?php
    //Funciones

    //Ejemplo 1 - Función básica
    function saludo(){
        echo '<h1>Hola</h1>';
    }

    saludo();

    //Ejemplo 2 - Función con argumentos o parámetros
    function suma($num1, $num2){
        echo $num1 + $num2.'<br>';
    }

    suma(10, 20);

    //Ejemplo 3 - Función con argumentos y un return
    function suma2($num1, $num2){
        return $num1 + $num2;
    }

    echo suma2(10, 20);

    //Ejemplo 4 - Función con argumentos y un parámetro por defecto

    function suma3($num1, $num2, $num3 = 15){
        return $num1 + $num2 + $num3;
    }

    echo suma3(10, 20); //Esto imprimirá 45, ya que tiene por defecto el valor 15 por su tercer parámetro


?>