<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
</head>
<body>
<?php
	if(isset($_POST['userName'])&& isset($_POST['password'])){

		if($_POST['userName']=='root' && $_POST['password']=='admin'){
		$_SESSION['userName'] = $_POST['userName'];
		
		header('Location: Practica8.php'); 
		
		}
		else{
			echo "Acceso Restringido";
		}

	}else{
		if(isset($_SESSION['userName'])){
			
			header('Location: Practica8.php'); 
			
		}else{
			echo "Acceso Restringido";
		}
	}
?>
<br/><a href="Practica7.php">Home</a>

</body>
</html>