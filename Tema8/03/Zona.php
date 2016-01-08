<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Zona
 *
 * @author Alberto Aragón
 */
class Zona {
  private $entradasPorVender;
  
  public function __construct($n){
    $this->entradasPorVender = $n;
  }
  
  public function getEntradasPorVender() {
    return $this->entradasPorVender;
  }
  
  /**
  * Vende un nÃºmero de entradas.
  * Comprueba si quedan entradas libres antes de realizar la venta.
  *
  * @param n nÃºmero de entradas a vender
  */
  public function vender($n) {
    if ($this->entradasPorVender == 0) {
      echo "Lo siento, las entradas para esa zona están agotadas.";
    } else if ($this->entradasPorVender < $n) {
      echo "Sólo me quedan " + $this->entradasPorVender + " entradas para esa zona.";
    }
    
    if ($this->entradasPorVender >= $n) {
      $this->entradasPorVender -= $n;
      echo "Aquí tiene sus " + n + " entradas, gracias.";
    }
  }
}
