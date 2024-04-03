<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo POO</title>
</head>
<body>
    <h1>Ejemplo POO</h1>
    
</body>
</html>

<?php   

    @require_once 'coche.php';
    //POO en PHP
    
    //Creamos un objeto de la clase Coche (instancia)
    $coche = new Coche("Rojo", "Toyota", "Corolla");
    echo '¡Hemos creado un coche!<br><br>Su información es la siguiente:';
    $coche->mostrarInformacion();

    $coche->setColor("Azul");
    echo "<br>El color del coche ha cambiado a: " . $coche->getColor();
    $coche->mostrarInformacion();
?>