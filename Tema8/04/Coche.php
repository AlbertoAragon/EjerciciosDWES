<?php
/*
Crea la clase Vehiculo, así como las clases Bicicleta y Coche como subclases de la primera. 
Para la clase Vehiculo, crea los métodos de clase getVehiculosCreados() y getKmTotales(); 
así como el método de instancia getKmRecorridos(). 
Crea también algún método específico para cada una de las subclases. 
Prueba las clases creadas mediante una aplicación que realice, al menos, las siguientes acciones:

    Anda con la bicicleta
    Haz el caballito con la bicicleta
    Anda con el coche
    Quema rueda con el coche
    Ver kilometraje de la bicicleta
    Ver kilometraje del coche
    Ver kilometraje total
*/

/**
 * Description of Coche
 *
 * @author Alberto Aragón
 */
include_once 'Vehiculo.php';

  class Coche extends Vehiculo {

    public function __construct() {
      parent::__construct();
    }

    public function anda($km) {
      echo "&nbsp ____<br>";
      echo "&nbsp/☺|☺\<br>";
      echo "O----O=ƆƆƆ BRMMM BRMMM!!!<br>" . parent::anda($km);
    }

    public function quemaRueda() {
      echo "BRRRRRRRRRRMMM!!!<br>";
      echo "Se me han quemado las ruedas<br>";
      echo "&nbsp&nbsp ____<br>";
      echo "&nbsp/☻|☻\<br>";
      echo "&nbsp&nbsp•----•=~<br>";
    }
  }
