<?php

$error = "¡ERROR! - Faltan valores por rellenar";

//Validamos todos los datos, uno a uno.

if (!empty($_POST['name']) && isset($_POST['name']) )
{
    $name = $_POST['name'];
    //Validación específica del nombre
    if(!is_string($name) || preg_match("/[0-9]/", $name))
    {
        $error="nombre";
    } else {
        $error="ok";
    }
}

if (!empty($_POST['surname']) && isset($_POST['surname']) )
{
    $surname = $_POST['surname'];
    //Validación específica del apellido
    if(!is_string($surname) || preg_match("/[0-9]/", $surname))
    {
        $error="apellido";
    } else {
        $error="ok";
    }
}

if (!empty($_POST['edad']) && isset($_POST['edad']) )
{
    $edad = (int)$_POST['edad'];
    //Validación específica del edad
    if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT))
    {
        $error="edad";
    } else {
        $error="ok";
    }
}

if (!empty($_POST['email']) && isset($_POST['email']) )
{
    $email = $_POST['email'];
    //Validación específica del correo
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) || !is_string($email))
    {
        $error="email";
    } else {
        $error="ok";
    }
}

if (!empty($_POST['pass']) && isset($_POST['pass']) )
{
    $pass = $_POST['pass'];
    //Validación específica del password
    if(empty($pass) || strlen($pass) < 8)
    {
        $error="pass";
    } else {
        $error="ok";
    }
}

if (isset($name)&&isset($surname)&&isset($edad)&&isset($email)&&isset($pass))
{
    $error="ok";
} else {
    $error="faltan_valores";
}


if($error != 'ok')
{
    header ("Location: index.php?error=$error");
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Validación de formularios</title>
    </head>
    <body>
        <h1>Validación de formularios PHP</h1>

        <?php echo "Tu nombre es $name, tus apellidos son $surname, tienes $edad años, tu email es $email y tu contraseña es $pass"; ?>
    </body>
</html>