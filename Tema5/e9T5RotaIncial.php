<!DOCTYPE html>
<!--
Realiza un programa que pida 10 números por teclado y que los almacene en un array. A
continuación se mostrará el contenido de ese array junto al índice (0 – 9). Seguidamente el programa
pedirá dos posiciones a las que llamaremos “inicial” y “final”. Se debe comprobar que inicial es
menor que final y que ambos números están entre 0 y 9. El programa deberá colocar el número de
la posición inicial en la posición final, rotando el resto de números para que no se pierda ninguno.
Al final se debe mostrar el array resultante.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table, th, td {
                border: 1px solid darkcyan;
            }
            table {
                border-collapse: collapse;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <?php
            //Primera página (entrada del primer array)
            if ((!isset($_GET['numero0'])) && (!isset($_GET['inicial'])) && (!isset($_GET['final']))){
        ?>
        <form action="#" method="get">
            Introduce diez números:<br>
            <?php              
                for ($i = 0; $i < 10; $i++) {
                    echo "<input type=\"number\" name=\"numero$i\"><br>";
                }
            ?>
            <input type="submit" value="Enviar">
        </form>
        <?php
            //Segunda página (muestra array y entrada de inicial y final)
            } if ((isset($_GET['numero0'])) && (!isset($_GET['inicial'])) && (!isset($_GET['final']))){
                //Recoger array original
                for ($i = 0; $i < 10; $i++) {
                    $numero[$i] = $_GET["numero$i"];
                } 

                //Mostrar array original
                echo "<table><caption>Array original</caption>";
                echo "<tr><td>Indice</td><td>numero Introducido</td>";
                for ($i = 0; $i < 10; $i++) {
                    echo "<tr><td>$i</td><td>$numero[$i]</td>";
                }
                echo "</table>";
        ?>
        <!--Pedir inicial y final-->
        <form action="#" method="get">
            Introduce los números (inicial debe ser menor que final):<br>
            Inicial<input min="0" max="9" type="number" name="inicial"><br>
            Final<input min="0" max="9" type="number" name="final"><br>            
            
        <?php
        //Volver a mandar el array original
            for ($i = 0; $i < 10; $i++) {
                echo "<input type=\"hidden\" name=\"numero$i\"value=\"$numero[$i]\"><br>";
            }
          echo "<input type=\"submit\" value=\"Enviar\"></form>";
            
          
            //Controlar que $inicial < $final
            } if ((isset($_GET['numero0'])) && (isset($_GET['inicial'])) && (isset($_GET['final']))){
                $inicial = $_GET["inicial"];
                $final = $_GET["final"];
                //Recoger array original
                for ($i = 0; $i < 10; $i++) {
                    $numero[$i] = $_GET["numero$i"];
                } 
                if ($inicial > $final) {
        ?>
        <form action="#" method="get">"
            Por favor, introduce un número inicial menor que el número final:<br>
            Inicial<input min="0" max="9" type="number" name="inicial"><br>
            Final<input min="0" max="9" type="number" name="final"><br>            
        <?php
        //Volver a mandar el array original
            for ($i = 0; $i < 10; $i++) {
                echo "<input type=\"hidden\" name=\"numero$i\" value=\"$numero[$i]\"><br>";
            }
          echo "<input type=\"submit\" value=\"Enviar\"></form>";   

        
            }   if (($inicial < $final)) {
                //Recoger array original
                for ($i = 0; $i < 10; $i++) {
                    $numero[$i] = $_GET["numero$i"];
                }
                //$inicial = $_GET["inicial"];
                //$final = $_GET["final"];
                //Cambiar final por inicial
                //for ($i = 0; $i < 10; $i++) {
                    //if ($i == $final) {
                        $auxiliar[$final] = $numero[$inicial];                         
                    //}  
                //}
                
                //Llenar el resto del array
                for ($i = 0; $i < 10; $i++) {
                    if ($i !== $final) {
                        $auxiliar[] = $numero[$i];                         
                    }  
                }
            //Mostrar array cambiado
                echo "$auxiliar[$final]";
            echo "<table><caption>Array cambiado</caption>";
            echo "<tr><td>Indice</td><td>numero Introducido</td>";
            for ($i = 0; $i < 10; $i++) {
                echo "<tr><td>$i</td><td>$auxiliar[$i]</td>";
            }
            echo "</table>"; 
            
           
            }  
            }
        ?>

    </body>
</html>
