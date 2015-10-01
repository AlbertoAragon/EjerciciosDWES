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
    <table>
      <tr>
        <?php
        echo '<th>English</th>';
        echo '<th>Español<th>';
        ?>
      </tr> 
      <tr>
        <td>Screen</td>
        <td>Pantalla</td>
      </tr>
      <tr>
        <?php $palabra1 = "Computer"; ?>
        <!-- No es necesario escribir php si sólo quiero mostrar el valor de una variable--!>
        <td><?= $palabra1 ?></td>
        <td>Ordenador</td>
      </tr>
      <?php
        echo '<tr>';
        echo '<td>Mouse</td>';
        echo '<td>Ratón</td>';
        echo '</tr>';
        ?>
    </table>
  </body>
</html>
