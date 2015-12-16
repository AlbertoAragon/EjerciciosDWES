<!DOCTYPE html>
<!--
Crea la clase Vehiculo, así como las clases Bicicleta y Coche como subclases de la primera. 
Para la clase Vehiculo, crea los métodos de clase getVehiculosCreados() y getKmTotales(); 
así como el método de instancia getKmRecorridos(). 
Crea también algún método específico para cada una de las subclases. 
Prueba las clases creadas mediante una aplicación que realice, al menos, las siguientes acciones:

    Anda con la bicicleta
    Haz el caballito con la bicicleta
    Anda con el coche
    Quema rueda con el coche
    Ver kilometraje de la bicicleta
    Ver kilometraje del coche
    Ver kilometraje total
-->
<?php
error_reporting(0);
  include_once 'Vehiculo.php';
  include_once 'Bicicleta.php';
  include_once 'Coche.php';
  
  //Crear y serializar bicicleta
  if (!isset($_SESSION['bicicleta'])) {
    $_SESSION['bicicleta'] = serialize(new Bicicleta());
  }
  
  $bicicleta = unserialize($_SESSION['bicicleta']);   
  
  //Crear y serializar bicicleta
  if (!isset($_SESSION['coche'])) {
    $_SESSION['coche'] = serialize(new Coche());
  }
  Vehiculo::setKmTotales( $_SESSION['kmTotales']);
  
  $coche = unserialize($_SESSION['coche']); 
?>
<form action="pagina.php?ejercicio=/04/04" method="POST">
  Selecciona una acción:
  <select name="accion">
    <option value="andaBici">Anda con la bicicleta</option>
    <option value="caballito">Haz el caballito con la bicicleta</option>
    <option value="andaCoche">Anda con el coche</option>
    <option value="quemaRueda">Quema rueda con el coche</option>
    <option value="kmBici">Ver kilometraje de la bicicleta</option>
    <option value="kmCoche">Ver kilometraje del coche</option>
    <option value="kmTotales">Ver kilometraje total</option>
  </select>
  <input type="submit" value="Seleccionar">
</form>  
<hr> 
<?php  
  //Andar con la bici
  if ($_POST['accion'] == "biciAndando") {
    $numeroDeKm = $_POST['numeroDeKm'];
    if (isset($numeroDeKm)) {
      $bicicleta->anda($numeroDeKm);
    }
  } 
  if ($_POST['accion'] == "andaBici") {
?>
<br>
<form action="pagina.php?ejercicio=/04/04" method="POST">
  Nº de km recorridos:
  <input type="number" name="numeroDeKm" min="1">
  <input type="submit" value="Anda">
  <input type="hidden" name="accion" value="biciAndando">
</form>

<?php
  }
  
  //Hacer el caballito con la bici
  if ($_POST['accion'] == "caballito") {
    $bicicleta->caballito();
  } 
  
  //Andar con el coche
  if ($_POST['accion'] == "cocheAndando") {
    $numeroDeKm = $_POST['numeroDeKm'];
    if (isset($numeroDeKm)) {
      $coche->anda($numeroDeKm);
    }
  } 
  if ($_POST['accion'] == "andaCoche") {
?>
<br>
<form action="pagina.php?ejercicio=/04/04" method="POST">
  Nº de km recorridos:
  <input type="number" name="numeroDeKm" min="1">
  <input type="submit" value="Anda">
  <input type="hidden" name="accion" value="cocheAndando">
</form>

<?php
  }
  
  //Quemar rueda con el coche
  if ($_POST['accion'] == "quemaRueda") {
    $coche->quemaRueda();
  } 
  
  //Ver Km bici
  if ($_POST['accion'] == "kmBici") {
    $bicicleta->getKmRecorridos();
  }
  
  //Ver Km coche
  if ($_POST['accion'] == "kmCoche") {
    $coche->getKmRecorridos();
  }
  
  //Ver Km totales
  if ($_POST['accion'] == "kmTotales") {
    echo "El kilometraje total de los vehículos ha sido: ". Vehiculo::getKmTotales();
  }
  ?>
  
  <?php
  $_SESSION['bicicleta'] = serialize($bicicleta);
  $_SESSION['coche'] = serialize($coche);
  $_SESSION['kmTotales'] = Vehiculo::getKmTotales();