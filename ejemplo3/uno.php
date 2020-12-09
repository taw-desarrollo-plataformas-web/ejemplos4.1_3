<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/estilos.css" type="text/css" />
    <title>Uso básico de PHP con formularios</title>
  </head>
  <body>
    <h2>Ingrese datos para generación</h2>
    <div class="miformulario">
        <form action="dos.php" method="post">
            <label for="nombre">Ingrese su nombre</label>
            <input type="text" name="nombre" id="nombre" required/>
            <br/>
            <br/>
            <label for="apellido">Ingrese su apellido</label>
            <input type="text" name="apellido" id="apellido" required/>
            <br/>
            <br/>
            <label for="tabla">Ingrese la tabla a generar</label>
            <input type="number" name="tabla" id="tabla" required/>
            <br/>
            <br/>
            <label for="limite">Ingrese el límite</label>
            <input type="number" name="limite" id="limite" required/>
            <br/>
            <br/>
            <input type="submit" name="enviar" id="enviar" value="Enviar" />
        </form>
    </div>
  </body>
</html>
