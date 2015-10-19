<!DOCTYPE html>
<!--
Realiza un programa que pida 10 números por teclado y que los almacene en un array. A
continuación se mostrará el contenido de ese array junto al índice (0 – 9) utilizando para ello una
tabla. Seguidamente el programa pasará los primos a las primeras posiciones, desplazando el resto
de números (los que no son primos) de tal forma que no se pierda ninguno. Al final se debe mostrar
el array resultante.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table, th, td {
                border: 1px solid darkcyan;
            }
            table {
                border-collapse: collapse;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <?php
            if (!isset($_GET['numero0'])){
        ?>
        <form action="#" method="get">
            Introduce diez números:<br>
            <?php              
                for ($i = 0; $i < 10; $i++) {
                    echo "<input type=\"number\" name=\"numero$i\"><br>";
                }
            ?>
            <input type="submit" value="Enviar">
        </form>
        <?php
            } else {                
            //Recoger array original
            for ($i = 0; $i < 10; $i++) {
              $numero[$i] = $_GET["numero$i"];
            }

            //Mostrar array original
            echo "<table><caption>Array original</caption>";
            echo "<tr><td>Indice</td><td>numero Introducido</td>";
            for ($i = 0; $i < 10; $i++) {
                echo "<tr><td>$i</td><td>$numero[$i]</td>";
            }
            echo "</table>";            
          
            //Pasar primos a las primeras posiciones            
            for ($i = 0; $i < 10; $i++) {
                $esPrimo = true;
                for ($j = $numero[$i] - 1; $j > 1; $j--) {
                    if ($numero[$i] % $j == 0) {
                        $esPrimo = false;                         
                    } 
                }
                //Poner 1, 0 y negativos como no primos
                if ($numero[$i] <= 1) {
                        $esPrimo = false;                         
                    } 
                //Meter los primos en el array aux    
                if ($esPrimo) {
                    $auxiliar[] = $numero[$i];                      
                }
            }

            //Pasar no primos a las celdas restantes
            for ($i = 0; $i < 10; $i++) {
                $esPrimo = true;
                for ($j = $numero[$i] - 1; $j > 1; $j--) {
                    if ($numero[$i] % $j == 0) {
                        $esPrimo = false;                         
                    } 
                }
                //Poner 1, 0 y negativos como no primos
                if ($numero[$i] <= 1) {
                        $esPrimo = false;                         
                    } 
                //Meter los no primos en el array aux 
                if (!$esPrimo) {
                    $auxiliar[] = $numero[$i];                      
                }
            }
            //Mostrar array primos
            echo "<table><caption>Primos primero</caption>";
            echo "<tr><td>Indice</td><td>numero Introducido</td>";
            for ($i = 0; $i < 10; $i++) {
                echo "<tr><td>$i</td><td>$auxiliar[$i]</td>";
            }
            echo "</table>"; 
           
            }     
        ?>

    </body>
</html>
