<!DOCTYPE html>
<!--
Ejercicio 7
Escribe un programa que genere 20 números enteros aleatorios entre 0 y 100 y que los almacene en
un array. El programa debe ser capaz de pasar todos los números pares a las primeras posiciones del
array (del 0 en adelante) y todos los números impares a las celdas restantes. Utiliza arrays auxiliares
si es necesario.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Números sin ordenar: <br>    
            <?php
                //Generar 20 aleatorios
                for ($i = 0; $i < 20; $i++) {
                    $numero[$i] = rand(0, 100);
                    echo $numero[$i], " ";
                }

                //Pasar pares a las primeras posiciones
                for ($i = 0; $i < 20; $i++) {
                    if ($numero[$i] % 2 == 0) {
                      $auxiliar[] = $numero[$i];
                    }
                }
                
                //Pasar impares a las celdas restantes
                for ($i = 0; $i < 20; $i++) {
                    if ($numero[$i] % 2 != 0) {
                      $auxiliar[] = $numero[$i];
                    }
                }
                
                //Reiniciar array $numero
                $numero = [];       
                                    
                //Pasar auxiliar a numero
                for ($i = 0; $i < 20; $i++) {                   
                    $numero[] = $auxiliar[$i];                    
                }
                
                $numero = implode(" ", $numero);
                echo "<br>Número ordenados (pares primero):<br>";
                echo $numero;
            ?>
    </body>
</html>
