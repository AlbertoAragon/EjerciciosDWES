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
    <?php
    $pesetas = 1000000;
    echo "pesetas = ", $pesetas, "</br>";
    echo "euros = ", $pesetas / 166.386, "</br>";
    //Para que sólo salgan dos decimales (redondeando):
    //echo$pesetas, "pesetas son", round($pesetas / 166.386,$precision = 2), "euros.";
    //Otra opción:
    //echo$pesetas, "pesetas son", round($pesetas / 166.386,2), "euros.";
    ?>
  </body>
</html>
