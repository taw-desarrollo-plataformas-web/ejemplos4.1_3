<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/estilos.css" type="text/css" />
    <title>Uso básico de PHP</title>
  </head>
  <body>
    <h3>Datos Ingresados</h3>
    <?php
      $nombre = $_REQUEST["nombre"];
      $apellido = $_REQUEST["apellido"];
      $datos = "<b>Nombre:</b>%s<br/><b>Apellido:</b>%s<br/>"; 
      echo sprintf($datos, $nombre, $apellido) ;

    ?>
    <table>
    <tr>
        <td>Multiplicado</td>
        <td>Símbolo</td>
        <td>Multiplicador</td>
        <td>Resultado</td>
    </tr>
      <?php
      // función en PHP
      function operacionMultiplicacion($num1, $num2){
        return $num1 * $num2;
      }
      $tabla = intval($_REQUEST['tabla']);
      $inicio = 1;
      $limiteTabla = intval($_REQUEST['limite']); 
      echo '<h3>Tabla del '.  $tabla, "</h3>";
      // uso de ciclo repetitivo
      while($inicio <= $limiteTabla){
        $formato = "<tr>
          <td>%d</td><td>%s</td><td>%d</td><td class='colorcelda'>%d</td>
          </tr>";
        // concatenar cadenas a través de sprintf
        echo sprintf($formato, $tabla, "*", $inicio, 
          operacionMultiplicacion($tabla, $inicio)); 
          // contador
          $inicio++;
      }
    
    ?>
    </table>
    <a href="uno.php">Regresar</a>
  </body>
</html>
