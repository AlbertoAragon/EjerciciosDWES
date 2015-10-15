<!DOCTYPE html>
<!--
Ejercicio 4
Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por pantalla
separados por espacios. El programa pedirá entonces por teclado dos valores y a continuación
cambiará todas las ocurrencias del primer valor por el segundo en la lista generada anteriormente.
Los números que se han cambiado deben aparecer resaltados de un color diferente.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .rojo {
                color: red;
            }
            
        </style>
    </head>
    <body>
        <?php
            if (!isset($_GET['numeroIntro0'])){
                
        ?>
        <br><br>
        <form action="#" method="get">
        Se han generado 100 números aleatoriamente: <br>    
            <?php
                //Generar 100 aleatorios y mostrarlos por pantalla
                for ($i = 0; $i < 100; $i++) {
                    $numero[$i] = rand(0, 20);
                    echo $numero[$i], " ";
                    echo "<input type=\"hidden\" name=\"numero$i\" value=\"$numero[$i]\">";
                }
                echo "<br><br>Introduce dos números (cambiaré el primero por el segundo)<br>";
                for ($i = 0; $i < 2; $i++) {
                    //Pedir dos valores por teclado
                    echo "<input type=\"number\" name=\"numeroIntro", $i, "\"><br>";
                }
            ?>
            <input type="submit" value="Enviar">
        </form>
        <?php
            } else {
                echo "Números generados:<br>";
                for ($i = 0; $i < 100; $i++) {
                  $numero[$i] = $_GET["numero$i"];
                  echo $numero[$i], " ";
                }
                echo "<br><br>Números introducidos:";        
                for ($i = 0; $i < 2; $i++) {
                  $numeroIntro[$i] = $_GET["numeroIntro$i"];
                  echo $numeroIntro[$i], " ";
                }
                
                echo "<br><br>Números cambiados:<br>";                
                foreach ($numero as $n) {
                    if ($n == $numeroIntro[0]) {
                      $n = $numeroIntro[1];
                      echo "<span class=\"rojo\">", $n, "</span> ";
                    } else {
                      echo $n, " ";
                    }
                } 
            }
        ?>

    </body>
</html>
