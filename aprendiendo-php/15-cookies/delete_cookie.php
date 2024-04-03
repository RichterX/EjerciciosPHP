<?php

//Borrar cookies. Es posible borrar cookies, pero primero, hay que "caducarlas".

//Primero caducamos las cookies.
setcookie("Micookie", "", time() - 3600);
setcookie("otraCookie", "", time() - 3600);

//Seguidamente comprobamos que existen y las borramos.
if($_COOKIE["Micookie"]){
    echo "<h1>Cookie 1 existente</h1>";
    unset($_COOKIE["Micookie"]);
}else{
    echo "<h1>No existen cookies</h1>";
}

if($_COOKIE["otraCookie"]){
    echo "<h1>Cookie 2 existente</h1>";
    unset($_COOKIE["otraCookie"]);
}else{
    echo "<h1>No existen cookies</h1>";
}

//Redireccionamos a otra pestaña.
header("Location: ver_cookies.php");