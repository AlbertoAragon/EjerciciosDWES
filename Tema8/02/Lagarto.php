<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lagarto
 *
 * @author Alberto Aragón
 */
include_once 'Animal.php';
class Lagarto extends Animal {
 
    /**
   * Hace que el lagarto tome el sol.
   */
  public function tomarSol() {
    echo "MMMM que bien se está tumbado bajo el Sol<br>";
    echo "Zzzzzzz<br>";
  }

  /**
   * Hace que el lagarto se limpie.
   */  
  public function aseate() {
    echo "Me estoy limpiando las escamas<br>";
  }
  
  /**
   * Hace que el lagarto coma.
   */  
  public function come() {
    echo "Tengo hambre<br>";
    echo "Voy a buscar mosquitos<br>";
  }
}
