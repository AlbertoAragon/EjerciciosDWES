<!DOCTYPE html>
<!--
Escribe un programa que calcule la media de un conjunto de números positivos introducidos por
teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha
terminado de introducir los datos cuando meta un número negativo. Utiliza sesiones.
-->
<?php
  session_start(); // Inicia la sesión
  error_reporting(0);
  // La primera vez que se carga la página, se inicializan
  // las variables de sesión numeros y visitas a cero.
  $numeroIntro = $_POST['numeroIntroducido'];
  if(!isset($_SESSION['numeros'])) {
    $_SESSION['numeros'] = 0;
  } else if ($numeroIntro > 0){
    $_SESSION['numeros'] += $numeroIntro;
  }

  if(!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 0;
  } else if ($numeroIntro > 0){
    $_SESSION['visitas']++;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Tema 6 - Ejercicio 1: Media</title>
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
    echo "Ha terminado de introducir números";
    echo "<br>La media de los números introducidos es ".($_SESSION['numeros'] / $_SESSION['visitas']). ".";
    session_destroy();
    
      }
    ?>
  </body>
</html>