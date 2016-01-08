<!DOCTYPE html>
<!--
Escribe un programa que guarde en una cookie el color de fondo (propiedad background-color) de
una página. Esta página debe tener únicamente algo de texto y un formulario para cambiar el color.

@author: Alberto Aragón Mora
-->
<?php
  error_reporting(0);
  
  // Si se envían datos desde el formulario de color, se actualizan las cookies
  if (isset($_POST["color"])) {
    $color = $_POST["color"];
    setcookie("color", $color, time() + 3*24*3600);
  } else if (isset($_COOKIE["color"])) {
    $color = $_COOKIE["color"];
  }
  
  if (isset($_POST["borraCookies"])) {
    setcookie("color", NULL, -1);
    unset($color);
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Tema 6 - Ejercicio 6: Cambia fondos</title>
    <link rel="stylesheet" href="/styles/e5T6.css">
  </head>
  <body>
    <div id="container" >
      <p style="background-color: <?=$color?>">Escribe un programa que guarde en una cookie el color de fondo (propiedad background-color) de
      una página. Esta página debe tener únicamente algo de texto y un formulario para cambiar el color.</p>
    <form action="#" method="post">
      Color: <input type="color" name ="color"><br>
      <input type="submit" value="Aceptar">
    </form>
    <hr>
    <form action="#" method="post">
      <input type="hidden" name="borraCookies" value="si">
      <input type="submit" value="Borrar cookies">
      <?php$color = "white";?>
    </form>
    
      </div> 
  </body>
</html>
