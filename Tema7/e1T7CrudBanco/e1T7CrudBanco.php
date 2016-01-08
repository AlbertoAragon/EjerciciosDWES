<!DOCTYPE html>
<!--
Crea una aplicación web que permita hacer listado, alta, baja y modificación sobre la tabla cliente
de la base de datos banco.
• Para realizar el listado bastará un SELECT, tal y como se ha visto en los ejemplos.
• El alta se realizará mediante un formulario donde se especificarán todos los campos del nuevo
registro. Luego esos datos se enviarán a una página que ejecutará INSERT.
• Para realizar una baja, se pedirá el DNI del cliente mediante un formulario y a continuación
se ejecutará DELETE para borrar el registro cuyo DNI coincida con el introducido.
• La modificación se realiza mediante UPDATE. Se pedirá previamente en un formulario el DNI
del cliente para el que queremos modificar los datos.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h2>
      Base de datos <u>banco</u><br>
      Tabla <u>cliente</u><br>
    </h2>

    
    <h3>Listado</h3>
    <form action="e1T7CrudBancoListado.php" method="post">
      <input type="submit" value="Listado">
    </form>  
    
    <hr>
    <h3>Alta de cliente</h3>
    <form action="e1T7CrudBancoAlta.php" method="post">
      Introduzca los datos necesarios para dar de alta un nuevo cliente:<br>
      DNI <input type="text" name="dniAlta" required><br>
      Nombre <input type="text" name="nombreAlta"><br>
      Dirección <input type="text" name="direccionAlta"><br>
      Teléfono <input type="tel" name="telefonoAlta"><br>
      <input type="submit" value="Enviar">
    </form>
    
    <hr>
    <h3>Baja de cliente</h3>
    <form action="e1T7CrudBancoBaja.php" method="post">
      Introduzca el DNI del cliente:<br>
      DNI <input type="text" name="dniBaja" required><br>
      <input type="submit" value="Enviar">
    </form>
    
    <hr>
    <h3>Modificación de cliente</h3>
    <form action="e1T7CrudBancoModificacionFormulario.php" method="post">
      Introduzca el DNI del cliente que desea modificar:<br>
      DNI <input type="text" name="dniModificacion" required><br>
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>
