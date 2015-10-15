<!DOCTYPE html>
<!--
Ejercicio 5
Realiza un programa que pida la temperatura media que ha hecho en cada mes de un determinado
año y que muestre a continuación un diagrama de barras horizontales con esos datos. Las barras
del diagrama se pueden dibujar a base de la concatenación de una imagen.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .rojo {
                background-color: red;
                width: 5px;
                height: 10px;
                display: inline-block;
                border: 1px solid black;
            }
            
        </style>
    </head>
    <body>
        <?php
            if (!isset($_GET['temperatura'])){
        ?>
        <form action="#" method="get">
            Introduce la temperatura de cada mes:<br>
            <?php
                $mes = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
                        "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
                for ($i = 0; $i < 12; $i++) {
                    echo "$mes[$i]: <input type=\"number\" name=\"temperatura[$mes[$i]]\"><br>";
                }
            ?>
            <input type="submit" value="Enviar">
        </form>
        <?php
            } else {                
                echo "<table>";
                $temperatura = $_GET["temperatura"];
                foreach($temperatura as $mes => $temperaturaMes) {
                echo "<tr><td>$mes $temperaturaMes","ºC</td>";
                // Pinta la barra
                echo "<td>";
                for ($i = 0; $i < $temperaturaMes; $i++) {
                  echo "<div class=\"rojo\"></div>";
                }
                echo "</td></tr>";
               // echo " $temperaturaMes","ºC<br>";
              }
              echo "</table>";
            }     
        ?>

    </body>
</html>
