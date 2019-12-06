<?php
	require('conexion.php');
	
	session_start();
	
	if(isset($_SESSION["loginAdmin"])){
		 
		header("Location: loginAdmin.php");

	}
	
	if(!empty($_POST))
	{
		$email = mysqli_real_escape_string($con,$_POST['email']);
		$password = mysqli_real_escape_string($con,$_POST['password']);
		$error = '';


		//$sha1_pass = $password;
		$password = $password;
		
		$sql = "SELECT IdAdmin FROM administrador WHERE email = '$email' AND password = '$password'";
		$result=$con->query($sql);
		$rows = $result->num_rows;
		
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['IdAdmin'] = $row['IdAdmin'];
			//$_SESSION['tipo_usuario'] = $row['id_tipo'];
			 
			header("location: HomeAdmin.php");
			} else {
			$error = "Correo o contraseña son incorrectos";
		}
		 
	}
?>
