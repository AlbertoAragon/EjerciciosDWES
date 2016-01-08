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
  </head>
  <body>
    
    <h2>
      Base de datos <u>banco</u><br>
      Tabla <u>cliente</u><br>
    </h2>
    <?php
    error_reporting(0);
      // Conexión a la base de datos
      try {
        $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root");
      } catch (PDOException $e) {
        echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
        die ("Error: " . $e->getMessage());
      }
      
      $consulta = $conexion->query("SELECT dni, nombre, direccion, telefono FROM cliente");
         
      ?>
      <table border="1">
      <tr>
        <td><b>DNI</b></td>
        <td><b>Nombre</b></td>
        <td><b>Dirección</b></td>
        <td><b>Teléfono</b></td>
      </tr>

      <?php
      while ($cliente = $consulta->fetchObject()) {
        ?>
        <tr>
          <td><?= $cliente->dni ?></td>
          <td><?= $cliente->nombre ?></td>
          <td><?= $cliente->direccion ?></td>
          <td><?= $cliente->telefono ?></td>
        </tr>
        <?php              
      }
      ?>
      </table>
      <br>
      Número de clientes: <?= $consulta->rowCount() ?>
      <br><a href="e1T7CrudBanco.php">Inicio</a><br>
      <?php $conexion->close(); ?>
  
    
  </body>
</html>
