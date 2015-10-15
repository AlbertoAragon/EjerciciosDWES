<!DOCTYPE html>
<!--
Ejercicio 13: Escribe un programa que ordene tres números enteros introducidos por teclado.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $primerNumeroIntro = $_GET['primerNumero'];
        $segundoNumeroIntro = $_GET['segundoNumero'];
        $tercerNumeroIntro = $_GET['tercerNumero'];
        $mayor = $primerNumeroIntro;
        $medio;
        $menor;

        //mayor
        if ((($primerNumeroIntro > $segundoNumeroIntro) and ($primerNumeroIntro > $tercerNumeroIntro))) {
            $mayor = $primerNumeroIntro;
        } 

        if ((($segundoNumeroIntro > $primerNumeroIntro) and ($segundoNumeroIntro > $tercerNumeroIntro))) {
            $mayor = $segundoNumeroIntro;
        }

        if ((($tercerNumeroIntro > $segundoNumeroIntro) and ($tercerNumeroIntro > $primerNumeroIntro))) {
            $mayor = $tercerNumeroIntro;
        }
    
        ?>
    </body>
</html>
