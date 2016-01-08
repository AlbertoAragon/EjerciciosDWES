<!DOCTYPE html>
<!--
Crea una aplicación web que permita hacer listado, alta, baja y modificación sobre la tabla cliente
de la base de datos banco.
• Para realizar el listado bastará un SELECT, tal y como se ha visto en los ejemplos.
• El alta se realizará mediante un formulario donde se especificarán todos los campos del nuevo
registro. Luego esos datos se enviarán a una página que ejecutará INSERT.
• Para realizar una baja, se pedirá el DNI del cliente mediante un formulario y a continuación
se ejecutará DELETE para borrar el registro cuyo DNI coincida con el introducido.
• La modificación se realiza mediante UPDATE. Se pedirá previamente en un formulario el DNI
del cliente para el que queremos modificar los datos.
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
error_reporting(0); 
// Conexión a la base de datos
      try {
        $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root");
      } catch (PDOException $e) {
        echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
        die ("Error: " . $e->getMessage());
      }
      
      // Comprueba si ya existe un cliente con el DNI introducido
      $consulta = $conexion->query("SELECT dni FROM cliente WHERE dni=".$_POST['dniModificacionAmpliado']);
      
      if ($consulta->rowCount() != 1) {
      ?>
        No existe un cliente con DNI <?= $_POST['dniModificacionAmpliado'] ?><br>
        Por favor, vuelva a la <a href="e1T7CrudBancoAmpliado.php">inicio</a>.
      <?php
      } else {
        $insercion = "UPDATE `cliente` SET `dni`='". $_POST[dniModificadoAmpliado] .
                "', `nombre`='". $_POST[nombreModificadoAmpliado] .
                "', `direccion`='". $_POST[direccionModificadoAmpliado] .
                "', `telefono`='". $_POST[telefonoModificadoAmpliado] .
                "' WHERE `dni`=". $_POST[dniModificacionAmpliado];
        //echo $insercion;
        $conexion->exec($insercion);
        echo "Cliente modificado correctamente.";
        echo "<br><br><a href=\"e1T7CrudBancoAmpliado.php\">Inicio</a><br>";
        $conexion->close();
      }
      ?>
  </body>
</html>

