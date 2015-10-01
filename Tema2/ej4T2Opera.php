<!DOCTYPE HTML>
<!-- 4.Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado. -->

<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php 
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    echo $numero1,  "+", $numero2,  "=", $numero1 + $numero2,"<br>";
    echo $numero1,  "-", $numero2,  "=", $numero1 - $numero2,"<br>";
    echo $numero1,  "*", $numero2,  "=", $numero1 * $numero2,"<br>";
    echo $numero1,  "/", $numero2,  "=", $numero1 / $numero2,"<br>";
?>
</body>
</html>