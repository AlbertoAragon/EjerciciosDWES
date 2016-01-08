<!DOCTYPE html>
<!--
Modifica el programa anterior añadiendo las siguientes mejoras:
• El listado debe aparecer paginado en caso de que haya muchos clientes.
• Al hacer un alta, se debe comprobar que no exista ningún cliente con el DNI introducido en
el formulario.
• La opción de borrado debe pedir confirmación.
• Cuando se realice la modificación de los datos de un cliente, los campos que no se han
cambiado deberán permanecer inalterados en la base de datos.
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
      $consulta = $conexion->query("SELECT dni FROM cliente WHERE dni=".$_POST['dniAltaAmpliado']);
      
      if ($consulta->rowCount() > 0) {
      ?>
        Ya existe un cliente con DNI <?= $_POST['dniAltaAmpliado'] ?><br>
        Por favor, vuelva a la <a href="e2T7CrudBancoAmpliado.php">página de alta de cliente</a>.
      <?php
      } else {
        $insercion = "INSERT INTO cliente (dni, nombre, direccion, telefono) VALUES ('$_POST[dniAltaAmpliado]','$_POST[nombreAltaAmpliado]','$_POST[direccionAltaAmpliado]','$_POST[telefonoAltaAmpliado]')";
        //echo $insercion;
        $conexion->exec($insercion);
        echo "Cliente dado de alta correctamente.";
        echo "<br><br><a href=\"e1T7CrudBancoAmpliado.php\">Inicio</a><br>";
        $conexion->close();
      }
      ?>
  </body>
</html>

