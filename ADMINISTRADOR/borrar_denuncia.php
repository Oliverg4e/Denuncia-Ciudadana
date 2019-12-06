<?php 

	include("db.php");

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "DELETE FROM denuncias WHERE id = $id";
		$result=mysqli_query($con,$query);
		if(!$result){
			die("Query Failed");
		}

		$_SESSION['message']='Denuncia Eliminada Satisfactoriamente';
		$_SESSION['message_type']='danger';
		header("Location: HomeAdmin.php");
	}




?>