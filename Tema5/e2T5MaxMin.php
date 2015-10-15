<!DOCTYPE html>
<!--
Ejercicio 2
Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos
junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if (!isset($_GET['numero0'])){
        ?>
        <form action="#" method="get">
            Introduce diez números<br>
            <?php
                for ($i = 0; $i < 10; $i++) {
                  echo "<input type=\"number\" name=\"numero", $i, "\"><br>";
                }
            ?>
            <input type="submit" value="Enviar">
        </form>
        <?php
            } else {
                $maximo = -PHP_INT_MAX;
                $minimo = PHP_INT_MAX;
                
                for ($i = 0; $i < 10; $i++) {
                  $numero[$i] = $_GET["numero$i"];
                }
                
                foreach ($numero as $n) {
                    if ($n < $minimo) {
                      $minimo = $n;
                    }
                    if ($n > $maximo) {
                      $maximo = $n;
                    }
                }
                
                foreach ($numero as $n) {
                    if ($n == $minimo) {
                      echo $minimo, " (mínimo)<br>";
                    } 
                    else if ($n == $maximo) {
                      echo $maximo, " (máximo)<br>";
                    } 
                    else {
                        echo $n, "<br>";
                    }
                }     
            }
        ?>

    </body>
</html>
