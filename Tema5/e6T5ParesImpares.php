<!DOCTYPE html>
<!--
Ejercicio 6
Realiza un programa que pida 8 números enteros y que luego muestre esos números de colores, los
pares de un color y los impares de otro.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .impar {
                color: red;
            }
            
            .par {
                color: green;
            }
        </style>
    </head>
    <body>
        <?php
            if (!isset($_GET['numero0'])){
        ?>
        <form action="#" method="get">
            Introduce ocho números<br>
            <?php
                for ($i = 0; $i < 8; $i++) {
                  echo "<input type=\"number\" name=\"numero", $i, "\"><br>";
                }
            ?>
            <input type="submit" value="Enviar">
        </form>
        <?php
            
            } else {
                echo "pares = verde<br>impares = rojo<br>";
                for ($i = 0; $i < 8; $i++) {
                  $numero[$i] = $_GET["numero$i"];
                }
                
                foreach ($numero as $n) {
                    if ($n % 2 == 0) {
                      echo "<span class = \"par\">$n</span> ";
                    } else {
                      echo "<span class = \"impar\">$n</span> ";
                    }
                }    
            }
        ?>

    </body>
</html>
