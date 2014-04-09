<?php
	session_start();

?>
<html>
<head>
<title>User Login</title>
</head>
	<body>

	<?php

		if(isset($_SESSION['userName'])){
				
				echo "<p><a href='cerrar.php'>Cerrar Sesion</a></p>";
		}
		else{

		?>
		<form name="frmUser" method="POST" action="practica8.php">
			<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
				<tr class="tableheader">
				<td align="center" colspan="2">Log In</td>
				</tr>
				<tr class="tablerow">
				<td align="right">Username</td>
				<td><input type="text" name="userName"></td>
				</tr>
				<tr class="tablerow">
				<td align="right">Password</td>
				<td><input type="password" name="password"></td>
				</tr>
				<tr class="tableheader">
				<td align="center" colspan="2"><input type="submit" name="Iniciar" value="Log In"></td>
				</tr>
			</table>
		</form>

	<?php
			}
	?>
	</body>
</html>