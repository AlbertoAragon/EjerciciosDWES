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
include_once 'Animal.php';
abstract class Mamifero extends Animal {


  /**
   * Hace que el mamífero se limpie.
   */  
  public function aseate() {
    echo "Me voy a dar un baño<br>";
  }
  
   /**
   * Hace que el mamífero beba.
   */  
  public function bebe() {
    echo "Voy a buscar un poco de agua<br>";
  }

  /**
   * Amamanta a los cachorros.
   * Sólo pueden amamantar las hembras.
   */
  public function amamanta() {
    if ($this->getSexo() == "hembra") {
      echo "Estoy amamantando a los cachorros<br>";
    } else {
        echo "No puedo dar de mamar<br>";
    }
  }
}
