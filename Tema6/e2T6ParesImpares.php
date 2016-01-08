<!DOCTYPE html>
<!--
Ejercicio 2
Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y
nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares. El
número negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye
en el cómputo. Utiliza sesiones.
-->
<?php
  session_start(); // Inicia la sesión
  error_reporting(0);
  // La primera vez que se carga la página, se inicializan
  // las variables de sesión numeros y visitas a cero.
  $numeroIntro = $_POST['numeroIntroducido'];
  
  if(!isset($_SESSION['totalNumeros'])) {
    $_SESSION['totalNumeros'] = 0;
    $_SESSION['totalImpares'] = 0;
    $_SESSION['numerosImpares'] = 0;
    $_SESSION['mayor'] = -1;
  } else if ($numeroIntro > 0){
    //Cuántos números se han introducido
    $_SESSION['totalNumeros']++;
    //Media de los impares
    if ($numeroIntro % 2 != 0) {
      $_SESSION['totalImpares']+= $numeroIntro;
      $_SESSION['numerosImpares']++ ;
    }
    
    if ($numeroIntro % 2 == 0) {
      if ($numeroIntro > $_SESSION['mayor']) {
        $_SESSION['mayor'] = $numeroIntro;
      }
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Tema 6 - Ejercicio 2: Pares</title>
  </head>
  <body>
    <?php
      if ((!isset($numeroIntro)) || ($numeroIntro > 0)) {
    ?>
    <form action="#" method="post">
      Introduce el número:<br>       
      <input type="number" name="numeroIntroducido" autofocus><br>
      <input type="submit" value="Enviar">
    </form>

    <?php
      } else { 
    echo "Ha terminado de introducir números<br>";
    echo "Se han introducido ". $_SESSION['totalNumeros']. " números<br>" ;
    echo "La media de los impares es ". ($_SESSION['totalImpares'] / $_SESSION['numerosImpares']). ".<br>";
    echo "El mayor de los pares es ". $_SESSION['mayor']. ".<br>";
      }
    ?>
  </body>
</html>
