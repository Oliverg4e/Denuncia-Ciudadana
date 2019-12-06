<?php

include("db.php");
include("map.php");


if  (isset($_POST['IdUsuario'])) {
	 $IdUsuario = $_POST['IdUsuario'];
	$query = "INSERT INTO denuncias(IdUsuario) VALUES(IdUsuario')";	
	 $result = mysqli_query($con, $query);
	  
	}

if (isset($_POST['generar_denuncia'])){
	
	$tipo = $_POST['tipo'];
	$comentario = $_POST['comentario'];
	$imagen = $_POST['imagen'];
	$latitud = $lat;
	$longitud =$lng;
	$query = "INSERT INTO denuncias(tipo,comentario,imagen,latitud,longitud) VALUES('$tipo','$comentario','$imagen','$latitud','$longitud')";
	$result=mysqli_query($con,$query);
	if (!$result){
		die("Query Failed");
	}
	
	$_SESSION['message']='Denuncia Generada Satisfactoriamente';
	$_SESSION['message_type']= 'success';
	header("Location: HomeAdmin.php");
}

?>
