<!DOCTYPE HTML>
<!-- 1.Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación. -->

<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php 
    $precio = $_GET['precio'];
    $base = $_GET['base'];
    echo "TOTAL = ", $precio * ($base/100);
?>
</body>
</html>