<!DOCTYPE html>
<!--
Modifica el programa anterior añadiendo las siguientes mejoras:
• El listado debe aparecer paginado en caso de que haya muchos clientes.
• Al hacer un alta, se debe comprobar que no exista ningún cliente con el DNI introducido en
el formulario.
• La opción de borrado debe pedir confirmación.
• Cuando se realice la modificación de los datos de un cliente, los campos que no se han
cambiado deberán permanecer inalterados en la base de datos.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h2>
      Base de datos <u>banco</u> Ampliado<br>
      Tabla <u>cliente</u><br>
    </h2>

    
    <h3>Listado</h3>
    <form action="e2T7CrudBancoListadoAmpliado.php" method="post">
      <input type="submit" value="Listado">
    </form>  
    
    <hr>
    <h3>Alta de cliente</h3>
    <form action="e2T7CrudBancoAltaAmpliado.php" method="post">
      Introduzca los datos necesarios para dar de alta un nuevo cliente:<br>
      DNI <input type="text" name="dniAltaAmpliado" required><br>
      Nombre <input type="text" name="nombreAltaAmpliado"><br>
      Dirección <input type="text" name="direccionAltaAmpliado"><br>
      Teléfono <input type="tel" name="telefonoAltaAmpliado"><br>
      <input type="submit" value="Enviar">
    </form>
    
    <hr>
    <h3>Baja de cliente</h3>
    <form action="e2T7CrudBancoBajaAmpliado.php" method="post">
      Introduzca el DNI del cliente:<br>
      DNI <input type="text" name="dniBajaAmpliado" required><br>
      <input type="submit" value="Enviar">
    </form>
    
    <hr>
    <h3>Modificación de cliente</h3>
    <form action="e2T7CrudBancoModificacionFormularioAmpliado.php" method="post">
      Introduzca el DNI del cliente que desea modificar:<br>
      DNI <input type="text" name="dniModificacionAmpliado" required><br>
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>
