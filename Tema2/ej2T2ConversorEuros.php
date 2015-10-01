<!DOCTYPE HTML>
<!-- 1.Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación. -->

<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php 
    $euros = $_GET['euros'];
    echo $euros, "€ son aproximadamente ", round(($euros * 166.386),0), " pesetas";
?>
</body>
</html>