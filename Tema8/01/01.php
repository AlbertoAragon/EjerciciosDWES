
<!--
Crea la clase DadoPoker. Las caras de un dado de poker tienen las siguientes figuras: As, K, Q, J,
7 y 8 . Crea el método tira() que no hace otra cosa que tirar el dado, es decir, genera un valor
aleatorio para el objeto al que se le aplica el método. Crea también el método nombreFigura(), que
diga cuál es la figura que ha salido en la última tirada del dado en cuestión. Crea, por último, el
método getTiradasTotales() que debe mostrar el número total de tiradas entre todos los dados.
Realiza una aplicación que permita tirar un cubilete con cinco dados de poker.
-->
<?php
error_reporting(0);
  include_once 'DadoPoker.php';
  $numeroDados = 5;
  
  if (!isset($_SESSION['cubilete'])) {
    //Creo el array cubilete que incluye los 5 objetos dados
    $cubilete = [];
    for ($i = 0; $i < $numeroDados; $i++) {
      $cubilete[] = new DadoPoker();
    }
    //Serializo el array de objetos
    $_SESSION['cubilete'] = serialize($cubilete);
    $cuentaTiradas = 0;
    $_SESSION['tiradasTotales'] = $cuentaTiradas;
  }
  $cuentaTiradas = $_SESSION['tiradasTotales'];
  //Deserializo el array de objetos
  $cubilete = unserialize($_SESSION['cubilete']);
  
  //Compruebo que se ha tirado el dado alguna vez  
  if ($_SESSION['tiradasTotales'] > 0) {
    
  ?>
  Resultados de la tirada anterior:
  <table  style="width:20%;" class="table table-striped table-bordered">
    <?php
    for ($i = 0; $i < $numeroDados; $i++) {
       ?>
          <tr>
            <th>Dado <?=$i?></th>
            <td style="width:50%;"><?=$cubilete[$i]->nombreFigura(); ?></td>
          </tr>
         <?php 
        }
        ?>
  </table>
  <?php
  }
  //Genero las 5 tiradas
  for ($i = 0; $i < $numeroDados; $i++) {
    $cubilete[$i]->tira();
  }
  ?>
  <!--Botón tirar-->
  <form action="pagina.php?ejercicio=/01/01" method="POST">
    Tirar el cubilete:<input type="submit" value="Tirar" name="Tirar">
  </form>

  <?php
    //Aumento las tiradas en 5
    $cuentaTiradas += 5;
    DadoPoker::setTiradasTotales($cuentaTiradas);
    $_SESSION['tiradasTotales'] = DadoPoker::getTiradasTotales();
    echo "tiradas totales: ".$_SESSION['tiradasTotales'];
    //echo "cubilete:";
    //var_dump($cubilete);
    $_SESSION['cubilete'] = serialize($cubilete);
?>
