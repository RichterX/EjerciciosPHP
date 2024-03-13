<?php
    // Arrays
    $coches = array("Volvo", "BMW", "Toyota");
    echo 'total de coches en el array: '.count($coches); //Mostramos cuantos elementos hay
    echo "<br>";
    echo 'primer elemento del array: '.$coches[0]; //Mostramos el primer elemento
    echo "<br>";
    echo 'segundo elemento del array: '.$coches[1]; //Mostramos el segundo elemento
    echo "<br>";
    echo 'tercer elemento del array: '.$coches[2]; //Mostramos el tercer elemento
    echo "<br><br>";

    // Meter datos en arrays
    echo 'Agregamos Merces, Audi y Kia en el array: ';
    $coches[] = "Mercedes";
    $coches[] = "Audi";
    $coches[] = "Kia";
    echo 'El total de coches en el array ahora es...: '.count($coches); //Mostramos cuantos elementos hay
    echo '<br>';
    // Mostramos el array
    print_r($coches);
    echo "<br><br>";

    // Eliminar elementos de un array
    echo 'Eliminamos el primer elemento del array con array_shift(): ';
    array_shift($coches);
    echo 'El total de coches en el array ahora es...: '.count($coches); //Mostramos cuantos elementos hay
    echo '<br>';
    print_r($coches);
    echo "<br><br>";

    // Eliminar elementos de un array
    echo 'Eliminamos el último elemento del array con array_pop(): ';
    array_pop($coches);
    echo 'El total de coches en el array ahora es...: '.count($coches); //Mostramos cuantos elementos hay
    echo '<br>';
    print_r($coches);
    echo "<br><br>";

    // Borramos el tercer elemento del array
    echo 'Eliminamos el tercer elemento del array con unset(): ';
    unset($coches[2]);
    echo 'El total de coches en el array ahora es...: '.count($coches); //Mostramos cuantos elementos hay
    echo '<br>';
    print_r($coches);
    echo "<br><br>";
    

    // Realizamos un corte en un array, indicando hasta donde queremos cortar, en este caso desde la posición 1, quedando solo el 0
    echo 'Realizamos un \'corte\' en el array con array_splice(): ';
    array_splice($coches, 1);
    echo 'El total de coches en el array ahora es...: '.count($coches); //Mostramos cuantos elementos hay
    echo '<br>';
    print_r($coches);
    echo "<br><br>";

    // Arrays asociativos. Funcionan como un índice clave/valor
    $coches = array(
        "Volvo" => "EX30", 
        "BMW" => "730", 
        "Toyota" => "CHR"
    );
    echo 'Mostramos el valor de la clave "Volvo": '.$coches["Volvo"]; //Mostramos el primer valor
    echo "<br>";
    echo 'Mostramos el valor de la clave "BMW": '.$coches["BMW"]; //Mostramos el segundo valor
    echo "<br>";
    echo 'Mostramos el valor de la clave "Toyota": '.$coches["Toyota"]; //Mostramos el tercer valor
    echo "<br><br>";

    // Arrays multidimensionales
    $coches2 = array
    (
        array("Volvo", "Mercedes"),
        array("BMW", "Audi"),
        array("Toyota", "Kia")
    );

    echo 'Mostramos el primer elemento del primer array: '.$coches2[0][0]; //Mostramos el primer elemento del primer array
    echo "<br>";
    echo 'Mostramos el segundo elemento del primer array: '.$coches2[0][1]; //Mostramos el segundo elemento del primer array
    echo "<br>";
    echo 'Mostramos el primer elemento del segundo array: '.$coches2[1][0]; //Mostramos el primer elemento del segundo array
    echo "<br>";
    echo 'Mostramos el segundo elemento del segundo array: '.$coches2[1][1]; //Mostramos el segundo elemento del segundo array
    echo "<br>";
    echo 'Mostramos el primer elemento del tercer array: '.$coches2[2][0]; //Mostramos el primer elemento del tercer array
    echo "<br>";
    echo 'Mostramos el segundo elemento del tercer array: '.$coches2[2][1]; //Mostramos el segundo elemento del tercer array
    echo "<br>";

    ////////////////////////////////// Funciones con arrays ////////////////////////////////////

    $coches3 = array("Volvo", "BMW", "Toyota");

    // count(): cuenta los elementos de un array
    echo 'total de coches en el array: '.count($coches3);
    echo "<br><br>";

    // in_array(): comprueba si un elemento existe en un array
    echo 'Con in_array() comprobamos si el elemento "Volvo" existe en el array: ';
    if(in_array("Volvo", $coches3))
    {
        echo "El elemento 'Volvo' existe en el array";
    }
    echo "<br><br>";

    // array_key_exists(): comprueba si una clave existe en un array
    echo 'Con array_key_exists() comprobamos si la clave "Volvo" existe en el array: '.'<br>';
    if(array_key_exists("Volvo", $coches2))
    {
        echo "La clave 'Volvo' existe en el array";
    }
    echo "<br><br>";

    // array_keys(): devuelve todas las claves de un array
    echo 'Con array_keys() devolvemos todas las claves del array: ';
    $claves = array_keys($coches2);
    print_r($claves);
    echo "<br><br>";

    // Ordenar un array por orden alfabético
    echo 'Ordenar un array por orden alfabético: ';
    sort($coches3);
    print_r($coches3);
    echo "<br><br>";

    // Ordenar un array por orden inverso
    echo 'Ordenar un array por orden inverso: ';
    rsort($coches3);
    print_r($coches3);
    echo "<br><br>";

    // Sacar un elemento aleatorio de un array
    echo 'Sacar un elemento aleatorio de un array: ';
    $aleatorio = array_rand($coches3);
    echo $coches3[$aleatorio];
    echo "<br><br>";


    //////////////////////////////////// Recorrer un array /////////////////////////////////

    //Recorremos un array con un bucle for
    $estaciones=array("Primavera", "Verano", "Otono", "Invierno");
    echo 'Recorremos un array con un bucle for: <br>';
    for ($i = 0; $i < count($estaciones); $i++) 
    {
        echo $estaciones[$i];
        echo "<br>";
    }
    echo "<br>";

    //Recorremos un array con un bucle foreach
    echo 'Recorremos un array con un bucle foreach: <br>';
    foreach ($estaciones as $estacion)
    {
        echo $estacion;
        echo "<br>";
    }
    echo "<br><br>";

    $nombre = 'Pedro';
    echo '<ul>';
    for ($i = 0; $i < strlen($nombre) ; $i++)
    {
        echo '<li>'.$nombre[$i].'</li>';
    }
    echo '</ul>';
    echo "<br><br>";

    

    


