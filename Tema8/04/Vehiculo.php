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
 * Description of Vehiculo
 *
 * @author Alberto Aragón
 */

  abstract class Vehiculo {
    
    private $kmRecorridos;
    private static $kmTotales = 0;
    private static $vehiculosCreados;
    
    public function __construct() {
      $this->kmRecorridos = 0;
      self::$vehiculosCreados++;
    }

    public function __toString() {
      return "Km recorridos: $this->kmRecorridos";
    }

    public static function getVehiculosCreados() {
      return self::vehiculosCreados;
    }
    
    public static function getKmTotales() {
      return self::$kmTotales;
    }
    
    public static function setKmTotales($km) {
      self::$kmTotales = $km;
    }
    
    public function getKmRecorridos() {
      echo $this->kmRecorridos;
    }
    
    public function anda($km) {
      $this->kmRecorridos += $km;
      self::$kmTotales += $km;
      return "He recorrido ". $km. " km.<br>";
    }
  }
