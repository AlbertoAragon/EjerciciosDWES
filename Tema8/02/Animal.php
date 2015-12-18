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
abstract class Animal {

  private $sexo;
  private static $arraySexo = ["hembra", "macho"];

  public function __construct($s) {
    if (!isset($s)) {
      $this->sexo = "macho";
    } else {
      $this->sexo = $s;
    }
  }

  public function getSexo() {
    return $this->sexo;
  }

  public function __toString() {
    return "Sexo: " . $this->sexo . "<br>";
  }
  
  /**
  * Hace que el animal se eche a dormir.
  */
  public function duerme() {
    echo "Zzzzzzz<br>";
  }
  
  /**
  * Hace que el animal eche a correr.
  */
  public function corre() {
    echo "Estoy corriendo<br>";
  }
  
  /**
  * Hace que el animal coma
  */
  public function come() {
    echo "Tengo hambre, voy a comer algo<br>";
  } 
}