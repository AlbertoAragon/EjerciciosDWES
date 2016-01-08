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
         
         $regPagina = 3;
         $conn = mysql_connect($dbhost, $dbuser/*, $dbpass*/);
         //$conn = new PDO("mysql:host=root;dbname=banco;charset=utf8", "root");
         if(! $conn )
         {
            die('Could not connect: ' . mysql_error());
         }
         mysql_select_db('banco');
         
         /* Get total number of records */
         $sql = "SELECT count(dni) FROM cliente ";
         $query = mysql_query( $sql, $conn );
         mysql_set_charset('utf8');
         if(! $query )
         {
            die('Could not get data: ' . mysql_error());
         }
         $row = mysql_fetch_array($query, MYSQL_NUM );
         $rec_count = $row[0];
         
         if( isset($_GET{'page'} ) )
         {
            $page = $_GET{'page'} + 1;
            $filaActual = $regPagina * $page ;
         }
         else
         {
            $page = 0;
            $filaActual = 0;
         }
         $regRestantes = $rec_count - ($page * $regPagina);
         $sql = "SELECT dni, nombre, direccion, telefono ".
            "FROM cliente ".
            "LIMIT $filaActual, $regPagina";
            
         $query = mysql_query( $sql, $conn );
         
         if(! $query )
         {
            die('Could not get data: ' . mysql_error());
         }
         ?>
      <table border="1">
      <tr>
        <td><b>DNI</b></td>
        <td><b>Nombre</b></td>
        <td><b>Dirección</b></td>
        <td><b>Teléfono</b></td>
      </tr>

      <?php
         while($row = mysql_fetch_array($query, MYSQL_ASSOC))
         {
      ?>     
      <tr>
          <td><?=$row['dni']?><?= $cliente->dni ?></td>
          <td><?=$row['nombre']?></td>
          <td><?=$row['direccion']?></td>
          <td><?=$row['telefono']?></td>
        </tr>   
            <!--
        echo "dni :{$row['dni']}  <br> ".
              "nombre : {$row['nombre']} <br> ".
              "dirección : {$row['direccion']} <br> ".
              "teléfono : {$row['telefono']} <br> ".
               "--------------------------------<br>";
         -->
      <?php        
          }
         ?>
      </table>
      <br>
      <?php
         if( $page > 0 )
         {
            $last = $page - 2;
            echo "<a href=\"$_PHP_SELF?page=$last\">Anterior</a> |";
            echo "<a href=\"$_PHP_SELF?page=$page\">Siguiente</a>";
         }
         
         else if( $page == 0 )
         {
            echo "<a href=\"$_PHP_SELF?page=$page\">Siguiente</a>";
			}
			
         else if( $regRestantes < $regPagina )
         {
            $last = $page - 2;
            echo "<a href=\"$_PHP_SELF?page=$last\">Anterior</a>";
         }
         
         mysql_close($conn);
      ?>
      
   </body>
</html>