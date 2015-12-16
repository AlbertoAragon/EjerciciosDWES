<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Capítulo 8 - PHP orientado a objetos</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Pagina principal</a></li>
            <li><a href="https://github.com/AlbertoAragon">GitHub</a></li>
            <li><a href="#"></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <div class="container">
      <br>
      <div class="jumbotron">
        <h4 class="text-center">8. PHP orientado a objetos</h4>
      </div>
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4>
          <span class="glyphicon glyphicon-pencil info" aria-hidden="true"></span>
          Ejercicio 1
          </h4>
        </div>
        <div class="panel-body">
          Crea la clase DadoPoker. Las caras de un dado de poker tienen las siguientes figuras: As, K, Q, J,
7 y 8 . Crea el método tira() que no hace otra cosa que tirar el dado, es decir, genera un valor
aleatorio para el objeto al que se le aplica el método. Crea también el método nombreFigura(), que
diga cuál es la figura que ha salido en la última tirada del dado en cuestión. Crea, por último, el
método getTiradasTotales() que debe mostrar el número total de tiradas entre todos los dados.
Realiza una aplicación que permita tirar un cubilete con cinco dados de poker.
        </div>
        <div class="panel-footer">
          <a class="btn btn-default" href="pagina.php?ejercicio=/01/01" role="button">Solución</a>
        </div>
      </div>
            

      <div class="panel panel-default">
        <div class="panel-heading">
          <h4>
          <span class="glyphicon glyphicon-pencil info" aria-hidden="true"></span>
          Ejercicio 2
          </h4>
        </div>
        <div class="panel-body">
            Crea las clases Animal, Mamifero, Ave, Gato, Perro, Canario, Pinguino y Lagarto. Crea, al menos,
tres métodos específicos de cada clase y redefine el/los método/s cuando sea necesario. Prueba las
clases en un programa en el que se instancien objetos y se les apliquen métodos. Puedes aprovechar
las capacidades que proporciona HTML y CSS para incluir imágenes, sonidos, animaciones, etc.
para representar acciones de objetos; por ejemplo, si el canario canta, el perro ladra, o el ave vuela.
          </div>
          <div class="panel-footer">
            <a class="btn btn-default" href="pagina.php?ejercicio=/02/02" role="button">Solución</a>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>
            <span class="glyphicon glyphicon-pencil info" aria-hidden="true"></span>
            Ejercicio 3
            </h4>
          </div>
          <div class="panel-body">
            Queremos gestionar la venta de entradas (no numeradas) de Expocoches Campanillas que tiene
3 zonas, la sala principal con 1000 entradas disponibles, la zona de compra-venta con 200 entradas
disponibles y la zona vip con 25 entradas disponibles. Hay que controlar que existen entradas
antes de venderlas. Define las clase Zona con sus atributos y métodos correspondientes y crea
un programa que permita vender las entradas. En la pantalla principal debe aparecer información
sobre las entradas disponibles y un formulario para vender entradas. Debemos indicar para qué
zona queremos las entradas y la cantidad de ellas. Lógicamente, el programa debe controlar que no
se puedan vender más entradas de la cuenta.
          </div>
          <div class="panel-footer">
            <a class="btn btn-default" href="pagina.php?ejercicio=/03/03" role="button">Solución</a>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>
            <span class="glyphicon glyphicon-pencil info" aria-hidden="true"></span>
            Ejercicio 4
            </h4>
          </div>
          <div class="panel-body">
            Crea la clase Vehiculo, así como las clases Bicicleta y Coche como subclases de la primera. Para la
            clase Vehiculo, crea los métodos de clase getVehiculosCreados() y getKmTotales(); así como el
            método de instancia getKmRecorridos(). Crea también algún método específico para cada una de
            las subclases. Prueba las clases creadas mediante una aplicación que realice, al menos, las siguientes
            acciones:
            <ul>
              <li>Anda con la bicicleta</li>
              <li>Haz el caballito con la bicicleta</li>
              <li>Anda con el coche</li>
              <li>Quema rueda con el coche</li>
              <li>Ver kilometraje de la bicicleta</li>
              <li>Ver kilometraje del coche</li>
              <li>Ver kilometraje total</li>
            </ul>
          </div>
          <div class="panel-footer">
            <a class="btn btn-default" href="pagina.php?ejercicio=/04/04" role="button">Solución</a>
          </div>
        </div>

        
    
    <div id="footer">
      <p class="text-center"></p>
    </div>
    
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
