<?php
    //Las sesiones en PHP sirven para almacenar y persistir la información mientras el cliente está navegando por la web.
    //Las sesiones son guardadas en el servidor y se pueden acceder desde cualquier parte de la web.
    //La sesión se pierde una vez el usuario cierra el navegador o cierra la sesión.

    //Iniciamos la sesion
    session_start();

    //Variable local
    $variable_cualquiera = "Hola mundo";

    //Variable de sesión. Se puede usar en cualquier página de mi dominio.
    $_SESSION['variable_persist'] =  "Hola soy una sesión activa";

    echo $variable_cualquiera.'<br>';
    echo $_SESSION['variable_persist'];

    //Podemos cerra la sesión con la funcion session_destroy(). Esto eliminará cualquier Variable de sesión. 
    session_destroy();
?>

