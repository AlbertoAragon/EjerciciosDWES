<!DOCTYPE HTML>
<!-- 1.Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación. -->

<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php 
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    echo "$numero1  x $numero2  =", $numero1 * $numero2;
?>
</body>
</html>