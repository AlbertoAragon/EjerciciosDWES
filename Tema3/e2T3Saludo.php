<!DOCTYPE html>
<!--
Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas
tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5.
respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $hora = $_GET['hora'];
        if (($hora >= 6) and ($hora <= 12)) {
        echo "Buenos días";
        }
        if (($hora >= 13) and ($hora <= 20)) {
        echo "Buenas tardes";
        }
        if (($hora >= 21) and ($hora <= 23)) {
        echo "Buenas noches";
        }
        if (($hora >= 0) and ($hora <= 5)) {
        echo "Buenas noches";
        }
        ?>
    </body>
</html>
