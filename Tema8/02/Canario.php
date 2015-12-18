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
include_once 'Ave.php';
class Canario extends Ave {
    
  /**
   * Hace que el canario cante.
   */
  public function canta() {
    echo "Piiio Pio Pio Piiiiiiiiio Piooo<br>";
  }

  /**
   * Hace que el canario coma.
   * A los canarios les gusta el alpiste, si le damos otra comida
   * la rechazará.
   * 
   */
  public function come($comida) {
    if ($comida == "alpiste") {
      echo "Hmmmm, gracias<br>";
    } else {
      echo "Me gusta el alpiste<br>";
      echo "Dame alpiste<br>";
    }
  }

  /**
   * Huye de un gato.
   * 
   * @param hambriento es el gato del que huir
   */
  public function huye($hambriento) {
      echo "¡Un gato!<br>";
      echo "¡Me voy volando!<br>";
  }
}
