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
class Pinguino extends Ave {
  
  /**
   * El pingüino baila para entrar en calor.
   */
  public function baila() {
    echo "Que frío hace aqui<br>";
    echo "Es lo que tiene vivir en el Polo Sur<br>";
    echo "Voy a bailar un poco para entrar en calor<br>";
  }

  /**
   * El pingüino intenta volar.
   */
  public function vuela() {
    echo "No puedo volar...¡pero puedo correr y aletear a la vez!<br>";
  }
  
  /**
   * El pingüino emigra.
   */
  public function emigra() {
    echo "Me voy de turismo a las Galápagos<br>";
  }
 
}
