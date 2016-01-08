<!DOCTYPE html>
<!--
Realiza un programa que escoja al azar 5 palabras en inglés de un mini-diccionario. El programa
pedirá que el usuario teclee la traducción al español de cada una de las palabras y comprobará si son
correctas. Al final, el programa deberá mostrar cuántas respuestas son válidas y cuántas erróneas.
La aplicación debe tener una opción para introducir los pares de palabras (inglés - español) que se
deben guardar en cookies; de esta forma, si de vez en cuando se dan de alta nuevas palabras, la
aplicación puede llegar a contar con un número considerable de entradas en el mini-diccionario.

@author: Alberto Aragón Mora
-->
<?php
error_reporting(0);  
// Actualizar las cookies
  if ($_POST['accion'] == "actualizarCookies") {
    foreach ($_SESSION['diccionario'] as $espanol => $ingles) {
      setcookie($espanol, $ingles, time() + 365 * 24 * 3600);
    }
  }  
  
  // Carga en una sesión las palabras que están almacenadas en las cookies
  foreach ($_COOKIE as $espanol => $ingles) {
    // Descartar cookies de otro ejercicio
    if ($espanol != "color") {
      $_SESSION['diccionario'][$espanol] = $ingles;
    }
  }
  
  // Borra cookies y sesiones
  if ($_POST['accion'] == "borrarCookies") {
    foreach ($_SESSION['diccionario'] as $espanol) {
      setcookie($espanol, NULL, -1);
    }
    unset($_SESSION['diccionario']);
  }
  
  //Crea una sesión para el diccionario
  if (!isset($_SESSION['diccionario'])) {
    $_SESSION['diccionario'] = array (
      "mesa" => "table",
      "aplicación" => "application",      
      "favorito" => "favorite",
      "desayuno" => "breakfast",
      "luz" => "light",
      "comer" => "eat",
      "viajar" => "travel",
      "ahora" => "now",
      "tranquilo" => "quiet",
    );
  }
  
  // Crea una variable que contenga la sesión
  $diccionario = $_SESSION['diccionario'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Tema 6 - Ejercicio 8: Diccionario</title>

  </head>
  <body>

<?php
  if (!isset($_POST['espanol'])) {
    echo "Traduce al inglés las siguientes palabras:<br>";

    // Extrae las palabras españolas
    foreach ($diccionario as $clave => $valor) {
      $palabrasEspanolas[] = $clave;
    }

    // Elige 5 palabras en español sin que se repita ninguna
    $contadorPalabras = 0;
    $espanol = array();
    
    do {
      $palabra = $palabrasEspanolas[rand(0, count($palabrasEspanolas) - 1)];

      if (!in_array($palabra, $espanol)) {
        $espanol[] = $palabra;
        $contadorPalabras++;
      }
    } while ($contadorPalabras < 5);
    
    echo '<form action="#" method="post">';
    for ($i = 0; $i < 5; $i++) {
      echo $espanol[$i]." ";
      echo '<input type="hidden" name="espanol['.$i.']" value="'.$espanol[$i].'">';
      echo '<input type="text" name="ingles['.$i.']" ><br>';
    }
    echo '<input type="submit" value="Aceptar">';
    echo '</form>';
  }  else {
    $espanol = $_POST['espanol'];
    $ingles = $_POST['ingles'];

    for ($i = 0; $i < 5; $i++) {
      echo $espanol[$i].": ".$ingles[$i];
      if ($diccionario[$espanol[$i]] == $ingles[$i]) {
        echo " - correcto<br>";
      } else {
        echo " - incorrecto, la respuesta correcta es ".$diccionario[$espanol[$i]]."<br>";
      }
    }
  }
  ?>
  
    <br>
  <form action="#" method="post">
    <input type="submit" value="Jugar otra vez">
  </form>
  <form action="e8T6DiccionarioAdmin.php" method="post">
    <input type="submit" value="Administrar los pares de palabras">
  </form>
  </body>
</html>
