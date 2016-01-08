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
class Gato extends Mamifero {
  
  private $raza;

  public function __construct ($r, $s) {
    //Controlar si se le pasa una sola variable
    if (isset($r)){
      //Caso1: $r es sexo
      if (in_array($r,$arraySexo)) {
        parent::__construct($r);
        $this->raza = "siamés";
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
   * Hace que el gato maulle.
   */
  public function maulla() {
    echo "Miauuuu<br>";
  }

  /**
   * Hace que el gato ronronee
   */ 
  public function ronronea() {
    echo "mrrrrrr<br>";
  }

  /**
   * Hace que el gato coma.
   * A los gatos les gusta el pescado, si le damos otra comida
   * la rechazará.
   * 
   */
  public function come($c) {
    if ($c == "pescado") {
      echo "Hmmmm, gracias<br>";
    } else {
      echo "Lo siento, yo solo como pescado<br>";
    }
  }

  /**
   * Pone a pelear dos gatos.
   * Solo se van a pelear dos machos entre sí.
   * 
   * @param contrincante es el gato contra el que pelear
   */
  public function peleaCon($contrincante) {
    if ($this->getSexo() == "hembra") {
      echo "no me gusta pelear";
    } else {
      if ($contrincante->getSexo() == "hembra") {
        echo "no peleo contra gatitas";
      } else {
        echo "ven aquí que te vas a enterar";
      }
    }
  }
}
