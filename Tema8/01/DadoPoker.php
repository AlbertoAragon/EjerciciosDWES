<?php

/*
Crea la clase DadoPoker. Las caras de un dado de poker tienen las siguientes figuras: As, K, Q, J,
7 y 8 . Crea el método tira() que no hace otra cosa que tirar el dado, es decir, genera un valor
aleatorio para el objeto al que se le aplica el método. Crea también el método nombreFigura(), que
diga cuál es la figura que ha salido en la última tirada del dado en cuestión. Crea, por último, el
método getTiradasTotales() que debe mostrar el número total de tiradas entre todos los dados.
Realiza una aplicación que permita tirar un cubilete con cinco dados de poker.
 */

/**
 * Description of DadoPoker
 *
 * @author Alberto Aragón
 */
class DadoPoker {
    
  private static $tiradasTotales = 0;

  // método de clase
  public static function getTiradasTotales() {
    return DadoPoker::$tiradasTotales;
  }
  
  public static function setTiradasTotales($tT) {
    DadoPoker::$tiradasTotales = $tT;
  }

  private $figura = ["As", "K", "Q", "J", 7, 8];
  private $figuraObtenida;
  
  public function __construct() {
  }

  public function tira() {
    //echo "valor de figura: ". var_dump($this->figura);
    $this->figuraObtenida = $this->figura[rand (0, 5)];
    DadoPoker::$tiradasTotales++;
  }
  
  public function nombreFigura() {
    echo $this->figuraObtenida;
  }
}

