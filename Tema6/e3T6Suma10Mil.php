<!DOCTYPE html>
<!--
Escribe un programa que permita ir introduciendo una serie indeterminada de números mientras
su suma no supere el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado,
el contador de los números introducidos y la media. Utiliza sesiones.
-->
<?php
  session_start(); // Inicia la sesión
  error_reporting(0);
  // La primera vez que se carga la página, se inicializan
  // las variables de sesión numeros y visitas a cero.

  $numeroIntro = $_POST['numeroIntroducido'];
 
  
  if(!isset($_SESSION['cuentaNumeros'])) {
    $_SESSION['totalAcumulado'] = 0;
    $_SESSION['cuentaNumeros'] = 0;
  } else if (($numeroIntro + ($_SESSION['totalAcumulado'])) < 10000){
    $_SESSION['cuentaNumeros']++;
    $_SESSION['totalAcumulado']+= $numeroIntro;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Tema 6 - Ejercicio 3: Suma 10Mil</title>
  </head>
  <body>
    <?php
      if (($numeroIntro + ($_SESSION['totalAcumulado'])) < 10000) {
    ?>
    <form action="#" method="post">
      Introduce el número:<br>       
      <input type="number" name="numeroIntroducido" autofocus><br>
      <input type="submit" value="Enviar">
    </form>

    <?php
      } else { 
    echo "Ha terminado de introducir números<br>";
    echo "Se ha introducido ". $_SESSION['cuentaNumeros']. " números<br>" ;
    echo "La media es ". ($_SESSION['totalAcumulado'] / $_SESSION['cuentaNumeros']). ".<br>";
    echo "El total acumulado es ". $_SESSION['totalAcumulado']. ".<br>";
      }
    ?>
  </body>
</html>