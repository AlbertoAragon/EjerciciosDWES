<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="e7T4Index.php" method="get">
            <input type="image" src="caja-cerrada.png" alt="Submit" width="512" height="512">
        </form>
            <br>
        <?php
        $coordenadaX = $_GET['x'];
        $coordenadaY = $_GET['y'];
        if ((($coordenadaX >= 252) && ($coordenadaX <= 284)) && (($coordenadaY >= 152) && ($coordenadaY <= 180))) {
            $codigo = "1";
            echo "$codigoFinal";
        }
               
        ?>
        <form>    
            <input type="hidden" name="codigo" value="<?=$codigo?>">
        </form>
    </body>
</html>
