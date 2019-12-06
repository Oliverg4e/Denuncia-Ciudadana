<?php
	require('conexion.php');
	
	session_start();
	
	if(isset($_SESSION["IdUsuario"])){
		 
		header("Location: user.php");

	}
	
	if(!empty($_POST))
	{
		$email = mysqli_real_escape_string($con,$_POST['email']);
		$password = mysqli_real_escape_string($con,$_POST['password']);
		$error = '';


		//$sha1_pass = $password;
		$password = $password;
		
		$sql = "SELECT IdUsuario FROM usuario WHERE email = '$email' AND password = '$password'";
		$result=$con->query($sql);
		$rows = $result->num_rows;
		
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['IdUsuario'] = $row['IdUsuario'];
			//$_SESSION['tipo_usuario'] = $row['id_tipo'];
			 
			header("location: HomeUser.php");
			} else {
			$error = "Correo o contraseña son incorrectos";
		}
		 
	}
?>
