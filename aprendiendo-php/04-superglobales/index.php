<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Master en PHP - Superglobales</title>
    </head>
    <body>
        <h1>Master en PHP - Superglobales - GET y POST</h1>
        <!-- Creamos un formulario de prueba -->
        <form method="POST" action="recibir.php">
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre">
            </div>
            <br>
            <div>
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos">
            </div>
            <br>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <br>
            <input type="submit" value="Enviar">
        </form>




        <?php
            /*
            //Variables superglobales de servidor
            echo 'Nombre del servidor o dominio: '.$_SERVER['SERVER_NAME']."<br>"; //Nos muestra el nombre del servidor o dominio
            echo 'Nombre del fichero actual: '.$_SERVER['PHP_SELF']."<br>"; //Nos muestra el nombre del fichero actual
            echo 'Nombre del fichero: '.$_SERVER['SCRIPT_NAME']."<br>"; //Nos muestra el nombre del fichero actual
            echo 'Host: '.$_SERVER['HTTP_HOST']."<br>"; //Nos muestra el nombre del host
            echo 'Navegador: '.$_SERVER['HTTP_USER_AGENT']."<br>"; //Nos muestra el nombre del navegador
            echo 'Fichero actual: '.$_SERVER['SCRIPT_FILENAME']."<br>"; //Nos muestra el nombre del fichero actual
            echo 'IP: '.$_SERVER['REMOTE_ADDR']."<br>"; //Nos muestra la IP
            echo 'Puerto: '.$_SERVER['REMOTE_PORT']."<br>"; //Nos muestra el puerto
            echo 'Método de petición: '.$_SERVER['REQUEST_METHOD']."<br>"; //Nos muestra el método de petición
            echo 'Software usado: '.$_SERVER['SERVER_SOFTWARE']."<br>"; //Nos muestra el software usado
            echo 'Protocolo: '.$_SERVER['SERVER_PROTOCOL']."<br>"; //Nos muestra el protocolo
            echo 'IP del cliente: '.$_SERVER['REMOTE_ADDR']."<br>"; //Nos muestra la IP del cliente

            //Variables $GET y $POST
            echo 'GET: '.$_GET['nombre']."<br>"; //Nos muestra el valor de la variable GET
            echo 'POST: '.$_POST['nombre']."<br>"; //Nos muestra el valor de la variable POST
            */
        ?>
    </body>
</html>