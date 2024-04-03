<?php
    /*
    Las controversiales cookies almacenan informaciónd del usuario, como por ejemplo la fecha de inicio de una sesión.
    Las cookies se almacenan en el navegador del usuario, de ahí la controversia en el uso de las mismas.
    */

    // Crear una cookie básica
    //setcookie("Nombre de la Cookie", "Valor que solamente puede ser texto", caducidad, ruta, dominio); 
    setcookie("Micookie", "Soy la cookie");

    // Creamos otra cookie que dura un año
    setcookie("otraCookie", "Soy la segunda cookie", time() + (60*60*24*365));
?>

<a href="ver_cookies.php">Ver Cookies</a>