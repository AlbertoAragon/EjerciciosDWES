<!DOCTYPE html>
<!--
Queremos gestionar la venta de entradas (no numeradas) de Expocoches Campanillas que tiene
3 zonas, la sala principal con 1000 entradas disponibles, la zona de compra-venta con 200 entradas
disponibles y la zona vip con 25 entradas disponibles. Hay que controlar que existen entradas
antes de venderlas. Define las clase Zona con sus atributos y métodos correspondientes y crea
un programa que permita vender las entradas. En la pantalla principal debe aparecer información
sobre las entradas disponibles y un formulario para vender entradas. Debemos indicar para qué
zona queremos las entradas y la cantidad de ellas. Lógicamente, el programa debe controlar que no
se puedan vender más entradas de la cuenta.
-->
<?php
error_reporting(0);
  include_once 'Zona.php';
  
  //Crear y serializar zonas //
  //Crear y serializar zonaPrincipal
  if (!isset($_SESSION['zonaPrincipal'])) {
    $_SESSION['zonaPrincipal'] = serialize(new Zona(1000));
  }
  
  $zonaPrincipal = unserialize($_SESSION['zonaPrincipal']);   
  
  //Crear y serializar zonaCompraVenta
  if (!isset($_SESSION['zonaCompraVenta'])) {
    $_SESSION['zonaCompraVenta'] = serialize(new Zona(200));
  }
  
  $zonaCompraVenta = unserialize($_SESSION['zonaCompraVenta']); 
  
  //Crear y serializar zonaVip
  if (!isset($_SESSION['zonaVip'])) {
    $_SESSION['zonaVip'] = serialize(new Zona(25));
  }
  
  $zonaVip = unserialize($_SESSION['zonaVip']); 
  // FIN crear y serializar zonas //
?>
<form action="pagina.php?ejercicio=/04/04" method="POST">
  Selecciona una acción:
  <select name="accion">
    <option value="andaBici">Anda con la zonaPrincipal</option>
    <option value="caballito">Haz el caballito con la zonaPrincipal</option>
    <option value="andaCoche">Anda con el coche</option>
    <option value="quemaRueda">Quema rueda con el coche</option>
    <option value="kmBici">Ver kilometraje de la zonaPrincipal</option>
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
      $zonaPrincipal->anda($numeroDeKm);
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
    $zonaPrincipal->caballito();
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
    $zonaPrincipal->getKmRecorridos();
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
  $_SESSION['zonaPrincipal'] = serialize($zonaPrincipal);
  $_SESSION['coche'] = serialize($coche);
  $_SESSION['kmTotales'] = Vehiculo::getKmTotales();