<?php
    session_start();
?>
<?php
require_once('contacto.php');
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
    <title>Editar Registro</title>
    <meta charset="UTF-8"> 
    </head>
        
    <body>


			<?php

				$id=$_GET["id"];

				

	            $modelo = new Contacto();
	            $contactos = $modelo->obtener($id);
	           



            ?>
    		<form name="frmUser" method="post" action="editar2.php">

	                <table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
	                    <tr class="tableheader">
	                    <td align="center" colspan="2">Editar Producto</td>
	                    </tr>
	                    <tr class="tablerow">
	                    <td align="right">Clave</td>
	                    <td><input type="text" name="clave" value="<?php echo $contactos['clave'];?>"</td>
	                    </tr>
	                    <tr class="tablerow">
	                    <td align="right">Producto</td>
	                    <td><input type="text" name="nombre" value="<?php echo $contactos['nombre'];?>"></td>
	                    </tr>
	                    <tr class="tablerow">
	                    <td align="right">Descripcion</td>
	                    <td><input type="text" name="descripcion" value="<?php echo $contactos['descripcion'];?>"></td>
	                    </tr>
	                    <tr class="tableheader">
	                    <td align="right">Precio</td>
	                    <td><input type="text" name="precio" value="<?php echo $contactos['precio'];?>"></td>
	                    <input type="hidden" name="id" value="<?php echo $contactos['idProducto'];?>">
	                    </tr>
	                    <tr class="tableheader">
	                    <td align="center" colspan="2"><input type="submit" name="Agregar" value="Editar"></td>
	                    </tr>
	                </table>

            </form>
        
 
    </body>
</html>