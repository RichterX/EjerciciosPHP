<?php



//Mostramos el valor de las cookies con la superglobal $_COOKIES. Es un array asociativo (diccionario)

//Comprobamos si existen cookies
if(isset($_COOKIE["Micookie"])){
    echo "<h1>Cookie 1 existente</h1>";
}else{
    echo "<h1>No existen cookies</h1>";
}

if(isset($_COOKIE["otraCookie"])){
    echo "<h1>Cookie 2 existente</h1>";
}else{
    echo "<h1>No existen cookies</h1>";
}

echo "<pre>";
echo $_COOKIE["Micookie"]."<br>";
echo $_COOKIE["otraCookie"];
echo "</pre>";

?>

<a href="delete_cookie.php">Eliminar Cookies</a>