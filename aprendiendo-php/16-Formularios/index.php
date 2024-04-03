<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ejemplo de formularios PHP y HTML</title>
    </head>
    <body>
        <h1>Formularios</h1>

        <form action="recibir.php" method="post"> <!-- existe otro parámetro (enctype) para codificar los datos y subir archivos -->
                <label for="name">Nombre:</label>
                <input type="text" name="name" placeholder="Escribe tu nombre" autofocus="autofocus"><br/><br/>

                <label for="surname">Apellidos:</label>
                <input type="text" name="surname" placeholder="Escribe tu apellido"><br/><br/>

                <label for="button">Botón:</label>
                <input type="button" name="button" value="Botón de la felicidad"><br/><br/>
           
                <label for="casado">¿Estas casado?</label>
                <input type="checkbox" name="casado" value="1"><br/><br/>
 
                <label for="radio">Sexo</label>
                <p>
                    Hombre <input type="radio" name="sexo" value="hombre"><br/>
                    Mujer <input type="radio" name="sexo" value="mujer"><br/><br/>
                <p>
<!--
                <hr size="2" noshade color="#D20F0F"/>

                <label for="color">Color favorito:</label>
                <input type="color" name="color"><br/><br/>

                <label for="date">Fecha de nacimiento:</label>
                <input type="date" name="date"><br/><br/>

                <label for="email">Email:</label>
                <input type="email" name="email"><br/><br/>

                <label for="number">Número:</label>
                <input type="number" name="number"><br/><br/>

                <label for="password">Contraseña:</label>
                <input type="password" name="password"><br/><br/>

                <label for="search">Buscar:</label>
                <input type="search" name="search"><br/><br/>

                <label for="tel">Teléfono:</label>
                <input type="tel" name="tel"><br/><br/>

                <label for="time">Hora:</label>
                <input type="time" name="time"><br/><br/>

                <label for="url">Página web:</label>
                <input type="url" name="url"><br/><br/>

                <label for="week">Semana:</label>
                <input type="week" name="week"><br/><br/>

                <label for="range">Rango:</label>
                <input type="range" name="range"><br/><br/>

                <label for="month">Mes:</label>
                <input type="month" name="month"><br/><br/>

                <label for="file">Archivo:</label>
                <input type="file" name="file" multiple="multiple"><br/><br/>

                <label for="desc">Descripción:</label>
                <p>
                    <textarea name="desc"></textarea>
                </p>

                Películas:
                <select name="peli">
                    <option value="peli1">Peli 1</option>
                    <option value="peli2">Peli 2</option>
                    <option value="peli3">Peli 3</option>
                </select>
-->
                <input type="submit" value="Enviar">

        </form>

    </body>
</html>
