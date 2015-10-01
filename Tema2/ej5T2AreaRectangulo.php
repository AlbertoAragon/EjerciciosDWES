<!DOCTYPE HTML>
<!-- 1.Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación. -->

<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php 
    $base = $_GET['base'];
    $altura = $_GET['altura'];
    echo "Área del rectángulo = ", $base * $altura;
?>
</body>
</html>