<!DOCTYPE html>
<!--
Establece un control de acceso mediante nombre de usuario y contraseña para cualquiera de los
programas de la relación anterior. La aplicación no nos dejará continuar hasta que iniciemos sesión
con un nombre de usuario y contraseña correctos.
-->
<?php
  session_start(); // Inicia la sesión
  error_reporting(0);

  $esCorrecto = false;
  if(!isset($_POST['usuarioIntroducido'])) {
    $usuarioIntro;
    $passIntro;
  } else {
  
  $usuarioIntro = $_POST['usuarioIntroducido'];
  $passIntro = $_POST['passIntroducido'];    
  }
  
  if(!isset($_SESSION['acceso'])) {
    $_SESSION['acceso'] = array();
    $_SESSION['acceso']["alberto"] = "passalberto";
    $_SESSION['acceso']["usuario"] = "contraseña";
    $_SESSION['acceso']["root"] = "root";    
  } else {
    foreach ($_SESSION['acceso'] as $usuarioCorrecto => $passCorrecto) {
      if (($usuarioCorrecto == $usuarioIntro) &&  ($passCorrecto == $passIntro)) {
        echo "Contraseña correcta, en tres segundos se redigirá hacia el ejercicio.";
        header( "refresh:3;url=..\Tema5/e1T5TablaNumeros.php" );
        $esCorrecto = true;
      }
    }
    if ((!$esCorrecto) && ($passIntro != "")) {
      echo "Usuario o contraseña incorrectos.";
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Tema 6 - Ejercicio 4: Usuario y contraseña</title>
  </head>
  <body>
    <?php
      if (!$esCorrecto) {
    ?>
    <form action="#" method="post">
      usuario: <input type="text" name="usuarioIntroducido" autofocus><br>
      contraseña: <input type="password" name="passIntroducido" ><br>      
      <input type="submit" value="Enviar">
    </form>

    <?php
      }
    ?>
  </body>
</html>
