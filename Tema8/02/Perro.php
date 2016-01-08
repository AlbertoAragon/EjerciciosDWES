<?php

/*
Crea las clases Animal, Mamifero, Ave, Gato, Perro, Canario, Pinguino y Lagarto. Crea, al menos,
tres métodos específicos de cada clase y redefine el/los método/s cuando sea necesario. Prueba las
clases en un programa en el que se instancien objetos y se les apliquen métodos. Puedes aprovechar
las capacidades que proporciona HTML y CSS para incluir imágenes, sonidos, animaciones, etc.
para representar acciones de objetos; por ejemplo, si el canario canta, el perro ladra, o el ave vuela.
 */

/**
 * Description of Animal
 *
 * @author Alberto Aragón
 */
include_once 'Mamifero.php';
class Perro extends Mamifero {
  
  private $raza;
  
  public function __construct ($r, $s) {
    //Controlar si se le pasa una sola variable
    if (isset($r)){
      //Caso1: $r es sexo
      if (in_array($r,$arraySexo)) {
        parent::__construct($r);
        $this->raza = "chihuahua";
        //Caso2: $r es raza
      } else {
        $this->raza = $r;
        parent::__construct($s);
      }
     //Controlar si se le pasan las dos variables 
    } else {
      $this->raza = $r;
      parent::__construct($s);
    }
  }
  
  public function __toString() {
    return parent::__toString()
            . "Raza: " . $this->raza
            . "<br>*************************<br>";
  }
  
  /**
   * Hace que el perro ladre.
   */
  public function ladra() {
    echo "Guau! Guau!";
  }

  /**
   * Hace que el perro gruña.
   */ 
  public function grune() {
    echo "Grrrr!";
  }

  /**
   * Hace que el perro coma.
   */

  public function come() {
      echo "Hmmmm, gracias<br>";
      echo "Déjame comer tranquilo<br>";
      echo"No me gusta que me molesten mientras como<br>";
  }

  /**
   * Pone a pelear dos perros.
   * Solo se van a pelear dos machos entre sí.
   * 
   */
  public function peleaCon($contrincante) {
    if ($this->getSexo() == "hembra") {
      echo "no me gusta pelear<br>";
    } else {
      if ($contrincante->getSexo() == "hembra") {
        echo "no peleo contra hembras<br>";
      } else {
        echo "Grrrr! Guau! Guau! Guau!<br>";
      }
    }
  }
}
