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
        <?php
        $mes = $_GET['mes'];
        $dia = $_GET['dia'];
        //OTRA FORMA: CON SWITCH(MES) Y LUEGO IF (DIA) DENTRO DE CADA SWITCH
        //Aries
        if ((($mes == 3) and ($dia >= 21)) || (($mes == 4) and ($dia <= 20))) {
            $signo = "aries";
            echo "<br><center>Tu signo es aries<br><img src=",$signo,".GIF style=\"max-width:60px\"></center>";
        }
        //Tauro(21/4 - 20/5)
        //Géminis(21/5 - 20/6)
        //Cáncer(21/6 - 20/7)
        //Leo(21/7 - 21/8)
        //Virgo(22/8 - 22/9)
        //Libra(23/9 - 22/10)
        //Escorpio(23/10 - 22/11)
        //Sagitario(23/11 - 20/12)
        //Capricornio(21/12 - 19/1)
        //Acuario (20/1 - 18/2)
        //Piscis(19/2 - 20/3)
        
        ?>
    </body>
</html>
