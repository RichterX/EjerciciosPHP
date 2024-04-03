<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Validación de formularios</title>
    </head>
    <body>
        <h1>Validación de formularios PHP</h1>

        <form action="formprocess.php" method="POST">
            <label for="name">Nombre:</label><br/>
            <input type="text" name="name" placeholder="Escribe tu nombre" autofocus="autofocus"><br/><br/>
            
            <label for="surname">Apellidos:</label><br/>
            <input type="text" name="surname" placeholder="Escribe tu apellido"><br/><br/>

            <label for="edad">Edad:</label><br/>
            <input type="number" name="edad" placeholder="Escribe tu edad"><br/><br/>

            <label for="email">Email:</label><br/>
            <input type="email" name="email" placeholder="Escribe tu email"><br/><br/> <!-- ya viene validado por defecto con HTML5 -->

            <label for="pass">Contraseña:</label><br/>
            <input type="password" name="pass" placeholder="Escribe tu contraseña"><br/><br/>

            <label for="submit">Enviar</label>
            <input type="submit" name="submit" value="Enviar">
        </form>
    </body>
</html>
