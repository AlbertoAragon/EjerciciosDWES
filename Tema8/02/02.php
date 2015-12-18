<!DOCTYPE html>
<!--
Crea las clases Animal, Mamifero, Ave, Gato, Perro, Canario, Pinguino y Lagarto. Crea, al menos,
tres métodos específicos de cada clase y redefine el/los método/s cuando sea necesario. Prueba las
clases en un programa en el que se instancien objetos y se les apliquen métodos. Puedes aprovechar
las capacidades que proporciona HTML y CSS para incluir imágenes, sonidos, animaciones, etc.
para representar acciones de objetos; por ejemplo, si el canario canta, el perro ladra, o el ave vuela.

-->
<?php
error_reporting(0);
  include_once 'Animal.php';
  include_once 'Ave.php';
  include_once 'Canario.php';
  include_once 'Gato.php';
  include_once 'Lagarto.php';
  include_once 'Mamifero.php';
  include_once 'Perro.php';
  include_once 'Pinguino.php';
  
  //Crear objetos
  $miCanaria = new Canario("hembra");
  $garfield = new Gato("macho");
  
  $lagartija = new Lagarto();
  $snoopy = new Perro("macho");
  $jerry = new Perro();
  $tux = new Pinguino();

  
  echo "Hola, Tom<br>";
  $tom = new Gato("persa","macho");
  echo "Tom:";
  $tom->corre();
  echo "<br>";

  echo "Ladra, Jerry<br>";
  $jerry = new Perro("hembra");
  echo "Jerry:";
  $jerry->ladra();
  echo "<br>";
  $silvestre = new Perro("macho");
  echo "Silvestre:";
  $silvestre->ladra();
  echo "<br>";
  echo "Toma un trozo de pan, Jerry<br>";
  $jerry->come();
  $dumbo = new Perro("macho");
  echo "¡Dumbo, no te pelees con Silvestre!<br>";
  $dumbo->peleaCon($silvestre);
  echo "<br>";     

  $piolin = new Canario();
  $piolin->canta();
  echo "Toma una pizza, Piolín<br>";
  $piolin->come("pizza");
  echo "Bueno, aquí tienes alpiste<br>";
  $piolin->come("alpiste");
  $tom->maulla();
  echo "¡Tom, no te comas a Piolín!<br>";
  $piolin->huye(tom);
  echo "<br>";

  echo "Voy al Polo Sur a ver a Pingu<br>";  
  $pingu = new Pinguino("macho");
  $pingu->baila();
  $pingu->emigra();
  echo "<br>";

  echo "Mira, un lagarto<br>";
  $lagartija = new Lagarto("hembra");
  $lagartija->aseate();
  $lagartija->come();
  $lagartija->tomarSol();


