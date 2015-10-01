<!DOCTYPE HTML>
<!-- 1.Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación. -->

<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php 
    $pesetas = $_GET['pesetas'];
    echo $pesetas, " ptas. son aproximadamente ", round(($pesetas / 166.386),2), " euros";
?>
</body>
</html>