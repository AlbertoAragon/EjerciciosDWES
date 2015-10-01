<!DOCTYPE html>
<!--
Realiza un programa que resuelva una ecuación de segundo grado (del tipo ax2 + bx + c = 0).
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //(condicion) ? verdadero : falso
        $valorA = $_GET['valorA'];
        $valorB = $_GET['valorB'];
        $valorC = $_GET['valorC'];
        $discriminante = pow($valorB,2) - 4 * $valorA * $valorC;
        //FALTAN LAS SOLUCIONES TENIENDO EN CASO DE QUE A=0,B=0,C=0
        if ($discriminante > 0) {
            $solucionUno = round((-$valorB + pow($discriminante, 1/2))/(2 * $valorA), 2);
            $solucionDos = round((-$valorB - pow($discriminante, 1/2))/(2 * $valorA), 2);
            echo "La ecuación tiene dos soluciones: ", $solucionUno, " y ", $solucionDos;
        }
        
        if ($discriminante == 0) {
            $solucionUno = -$valorB/(2 * $valorA);
            echo "La ecuación tiene una solución: ", $solucionUno;
        }
        
        if ($discriminante < 0) {
            echo "La ecuación no tiene solución.";
        }
        ?>
    </body>
</html>
