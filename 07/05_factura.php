<h2 class="text-center text-primary">F A C T U R A M A L (factura gestisimal)</h2>
<br>
<?php // Tienda ///////////////////////////////////////////////////////
error_reporting(0);
  // Vuelca el contenido da la tabla catalogo en el array $producto

  $conexion = mysql_connect("localhost", "root");
  mysql_select_db("gestisimal", $conexion);
  mysql_set_charset('utf8');


  // Listado /////////////////////////////////////////////////
  $listadoArticulos = "SELECT codigo, descripcion, precio_compra, precio_venta, stock FROM articulo ORDER BY descripcion";// LIMIT ".(($_SESSION['pagina'] - 1) * 5).", 5";
  $consulta = mysql_query($listadoArticulos, $conexion);
  // Listado /////////////////////////////////////////////////

  ?>
  

      <?php // Carrito ///////////////////////////////////////////////////////
      
      // Listado Carrito/////////////////////////////////////////////////
      $listadoArticulos2 = "SELECT codigo, descripcion, precio_compra, precio_venta, stock FROM articulo ORDER BY descripcion";// LIMIT ".(($_SESSION['pagina'] - 1) * 5).", 5";
      $consultaCarrito = mysql_query($listadoArticulos2, $conexion);
      // Listado /////////////////////////////////////////////////
    
      while ($registro = mysql_fetch_array($consultaCarrito)) {
        $producto[$registro[codigo]] = array(
          "nombre" => $registro[nombre],
          "precio" => $registro[precio_venta],
        );
      }  
    
      $_SESSION['producto'] = $producto;
  
  
      //$accion = $_POST['accion'];
      //$codigo = $_POST['codigo'];

      // Muestra el contenido del carrito
      $total = 0;
      ?>
      

          
            <table  class="table table-condensed">
              <tr>
        <th>Código</th>
        <th>Precio</th>
        <th>Unidades</th>

      </tr>
            <?php
            foreach ($producto as $cod => $elemento) {
              if ($_SESSION[carrito][$cod] > 0) {
                
                $total = $total + ($_SESSION[carrito][$cod] * $elemento[precio]);
                ?>
                <tr>
                <td><?=$cod?><br></td>                
                <td><?=$elemento[precio]?> €<br></td>
                <td><?=$_SESSION[carrito][$cod]?></td>
                
                <br><br>
                </tr>
      <?php
        $salida = "UPDATE articulo SET stock=stock-".$_SESSION[carrito][$cod]." WHERE codigo=\"$cod\"";
        mysql_query($salida, $conexion);        
      
              }
    }
    ?>
</table>

            <div class="panel-footer">Base imponible: <?=$total?> €</div>
            <div class="panel-footer"><b>IVA: <?=round($total * 0.21, 2)?> €</b></div>
            <div class="panel-footer"><b>Total: <?=round($total * 1.21, 2)?> €</b></div>
            <form action="pagina.php" method="post">
                  <input type="hidden" name="ejercicio" value="05">
                  <input type="hidden" name="codigo" value="<?=$cod?>">
                  <input type="hidden" name="accion" value="reiniciar">
                  <button type="submit" class="btn btn-danger">
                    <span class="glyphicon glyphicon-trash"></span>
                    Inicio G E S T I S I M A L
                  </button>
                </form><br><br>
            

          </div>
      </div>

