<!DOCTYPE html>
<!--
Ejercicio 3
Escribe un programa que lea 15 números por teclado y que los almacene en un array. Rota los
elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a
la 2, etc. El número que se encuentra en la última posición debe pasar a la posición 0. Finalmente,
muestra el contenido del array.
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
                for ($i = 0; $i < 3; $i++) {
                  echo "<input type=\"number\" name=\"numero", $i, "\"><br>";
                }
            ?>
            <input type="submit" value="Enviar">
        </form>
        <?php
            } else {
                                
                for ($i = 0; $i < 3; $i++) {
                  $numero[$i] = $_GET["numero$i"];
                }
                $auxiliar = $numero[2];
                for ($i = 2; $i > 0; $i--) {
                    $numeroRotado[$i] = $numero[$i - 1];
                }
                $numeroRotado[0] = $auxiliar; 
                
                for ($i = 0; $i < 3; $i++) {
                    echo $numeroRotado[$i], "<br>";
                }
            }     
        ?>

    </body>
</html>
