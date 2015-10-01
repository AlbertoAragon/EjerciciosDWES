<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--
Se puede meter una línea entera de HTML en una variable.
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
          echo '<th>Hora</th>';
          echo '<th>Lunes</th>';
          echo '<th>Martes</th>';
          echo '<th>Miércoles</th>';
          echo '<th>Jueves</th>';
          echo '<th>Viernes</th>';
          ?>
       </tr> 
       <tr>
          <th>1</th>
          <td>DWES</td>
          <td>DWEC</td>
          <td>DWES</td>
          <td>DWEC</td>
          <td>DIW</td>
       </tr>
        <?php
          echo '<tr>';
          echo '<th>2</th>';
          echo '<td>DWES</td>';
          echo '<td>DWEC</td>';
          echo '<td>DWES</td>';
          echo '<td>DWEC</td>';
          echo '<td>DIW</td>';
          echo '</tr>';
          ?>
    </table> 
  </body>
</html>
