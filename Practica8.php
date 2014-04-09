<?php
require_once('contacto.php');
require_once('Listar.php');
?>
<?php
    session_start();
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
    <title>Ejemplo de PHP y MySQL</title>
    <meta charset="UTF-8"> 
    </head>
        
    <body>
        <h1>Mostrar los elementos</h1>


    <?php

        if(isset($_POST['userName'])&& isset($_POST['password'])){

            if($_POST['userName']=='root' && $_POST['password']=='admin'){
            $_SESSION['userName'] = $_POST['userName'];


                
                echo "<p> <a href='cerrar.php'>Cerrar Sesion</a></p>";
               
          

    ?>
             <form name="frmUser" method="post" action="Nuevo.html">
                <input type="submit" name="Agregar" value="Agregar">

    <?php

            $modelo = new Contacto();
            $contactos = $modelo->encontrarTodos();
            $listar = new ListarContactos();
            $listar->contactos = $contactos;
            $listar->generaTabla();

    
            
            }
            else{
                echo "Acceso Restringido";
            }

        }else{
            if(isset($_SESSION['userName'])){

        
        echo "<p> <a href='cerrar.php'>Cerrar Sesion</a></p>";
       
    ?>
             <form name="frmUser" method="post" action="Nuevo.html">
                <input type="submit" name="Agregar" value="Agregar">

    <?php
                
                $modelo = new Contacto();
                $contactos = $modelo->encontrarTodos();
                $listar = new ListarContactos();
                $listar->contactos = $contactos;
                $listar->generaTabla();

  
                
            }else{
                echo "Acceso Restringido";
            }
        }
    ?>
 
    </body>
</html>