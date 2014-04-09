<?php
require_once('contacto.php');

?>

		<?php

		if (isset($_POST["clave"]) && isset($_POST["nombre"]) && isset($_POST["precio"])) {

			    $clave = $_POST["clave"];
			    $nombre = $_POST["nombre"];
			    $descripcion = $_POST["descripcion"];
			    $precio = $_POST["precio"];
			    $id = $_POST["id"];
			    $modelo = new Contacto();
            	$contactos = $modelo->editar($id,$clave,$nombre,$descripcion,$precio);	 
            	header('Location: Practica8.php');   
			}
		else {
			
			echo "Ingrese los campos obligatorios: Clave, Producto, Precio";
		}

          

         ?>