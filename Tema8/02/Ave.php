<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Animal
 *
 * @author Alberto Aragón
 */
include_once 'Animal.php';
abstract class Ave extends Animal {

  /**
   * Hace que el ave se limpie.
   */  
  public function aseate() {
    echo "Me estoy limpiando las plumas<br>";
  }

  /**
   * Hace que el ave levante el vuelo.
   */  
  public function vuela() {
    echo "Estoy volando<br>";
  }
  
  
}

