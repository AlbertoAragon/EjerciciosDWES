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
      <title>Listado banco ampliado</title>
      <meta charset="UTF-8">
   </head>
   
   <body>
     <h2>
      Base de datos banco Ampliado<br>
      Tabla cliente<br>
    </h2>
      <?php
        error_reporting(0);
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = 'root';
        $dbname = 'banco';
         
        
        //Conexión a la BBDD
        try {
          $conexion = new PDO("mysql:host={$dbhost};dbname={$dbname};charset=utf8",$dbuser/*, $dbpass*/);
        } catch (PDOException $e) {
          echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
          die ("Error: " . $e->getMessage());
        }

        // Obtener número total de registros
        $todo = $conexion->query("SELECT * FROM cliente ");
        $TotalReg = $todo->rowCount();
        $regPagina = 3;
        //ceil() redondea hacia arriba y floor() haia abajo
        $totalPag = ceil($TotalReg / $regPagina); 

        
        //Determinar página actual 
        if(isset($_POST{'accion'})) {
            $accion = $_POST{'accion'};
            if ($accion == 1) {
              $filaActual = $filaActual + $regPagina;
            } else if ($accion == -1){
              $filaActual = $filaActual - $regPagina;
            }
         } else {
           $filaActual = 0;
         }


        //Consulta  
        $consulta = $conexion->query("SELECT dni, nombre, direccion, telefono FROM cliente ".
          "LIMIT $filaActual, $regPagina");
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
      
      <?php
      if ($filaActual > 0) {
      ?>
      <form action="#" method="post">
        <input type="hidden" name="accion" value="-1" >
        <input type="submit" value="Anterior"> 
      </form> 
      <?php
      }
      if ($filaActual < ($TotalReg + $regPagina)) {
      ?>
        <form action="#" method="post">
          <input type="hidden" name="accion" value="1" >
          <input type="submit" value="Siguiente">
        </form> 
          
        <?php
      }
      
        
      ?>
    <br><br>Número de clientes: <?= $consulta->rowCount() ?>
    <br><a href="e2T7CrudBancoAmpliado.php">Inicio</a><br>
    <?php $conexion->close(); ?>
  
    
  </body>
</html>


