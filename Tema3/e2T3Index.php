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
        Dime qué hora es:
        <form action="e2T3Saludo.php" method="get">
            <input type="number" min="0" max="23" step="1" name="hora"><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
