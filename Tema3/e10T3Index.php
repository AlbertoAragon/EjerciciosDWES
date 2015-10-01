<!DOCTYPE html>
<!--
Escribe un programa que nos diga el horóscopo a partir del día y el mes de nacimiento.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Dime tu mes y día de nacimiento y te diré cuál es tu horóscopo:
        <form action="e10T3Horoscopo.php" method="get">
            Introduce el mes:
            <input type="number" name="mes"><br>
            Introduce el día:
            <input type="number" name="dia"><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
