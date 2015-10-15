<!DOCTYPE html>
<!--
Ejercicio 1

Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”.
Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se deben
almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo” se deben
almacenar los cubos de los valores que hay en “numero”. A continuación, muestra el contenido de
los tres arrays dispuesto en tres columnas.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    número
                </td>
                <td>
                    cuadrado
                </td>
                <td>
                    cubo
                </td>
            </tr>
            <?php
                for ($i = 0; $i < 20; $i++) {
                    $numero[$i] = rand(0, 100);
                    $cuadrado[$i] = pow($numero[$i], 2);
                    $cubo[$i] = pow($numero[$i], 3);
                }
           
                for ($i = 0; $i < 20; $i++) {
                   echo "<tr><td>",$numero[$i], "</td>";
                   echo "<td>", $cuadrado[$i], "</td>";
                   echo "<td>", $cubo[$i], "</td><tr>";
                }
            ?>
        </table>
        <a href="indexTema5.php">Inicio</a>
        <a href="e2T5MaxMin.php">Siguiente</a>
    </body>
</html>
