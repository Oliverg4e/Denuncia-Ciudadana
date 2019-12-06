<?php
	include("db.php");
	$tipo = '';
	$comentario= '';
	$status= '';
	if  (isset($_GET['id'])) {
	  $id = $_GET['id'];
	  $query = "SELECT * FROM denuncias WHERE id=$id";
	  $result = mysqli_query($con, $query);
	  if (mysqli_num_rows($result) == 1) {
	    $row = mysqli_fetch_array($result);
	    $tipo = $row['tipo'];
	    $comentario = $row['comentario'];
	    $status = $row['status'];
	    //$imagen = $_POST['imagen'];
	  }
	}

	if (isset($_POST['actualizar'])) {
	  $id = $_GET['id'];
	  $tipo= $_POST['tipo'];
	  $comentario = $_POST['comentario'];
	  $status = $_POST['status'];
	 // $imagen = $_POST['imagen'];
	  $query = "UPDATE denuncias set tipo = '$tipo', comentario = '$comentario' , status='$status' WHERE id=$id";
	  mysqli_query($con, $query);
	  $_SESSION['message'] = 'Denuncia actualizada Satisfactoriamente';
	  $_SESSION['message_type'] = 'warning';
	  header('Location: HomeAdmin.php');
	}
?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="actualizar.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">

          <div class="form-group">
					<center><h3> <span class="badge badge-dark">DENUNCIA CIUDADANA </span></h3></center>	
						<select  class="custom-select" type="submit" name="tipo" class="form-control" placeholder="Tipo de Denuncia" autofocus="">
						  <option value="<?php echo $tipo; ?>"><?php echo $tipo; ?></option>
						  <option value="Bache">Bache</option>
						  <option value="Animal Muerto">Animal Muerto</option>
						  <option value="Arroyo Corriendo">Arroyo Corriendo</option>
						  <option value="Falla de Alumbrado">Falla de Alumbrado</option>
						  <option value="Incendio en Terreno Baldio">Incendio en Terreno Baldio</option>
						  <option value="Bandalismo">Bandalismo</option>
						  <option value="Bandalismo">Carro Abandonado</option>
						</select>
					</div>
			        </div>
			        <div class="form-group">
			        	<textarea name="comentario" class="form-control" cols="20" rows="10"><?php echo $comentario;?></textarea>
			        </div>
			        
			        <div class="form-group">
			           
			            <input type="text" name="status" class="form-control"  value=<?php echo $status;?> ></input>
			         </div>

        <button class="btn btn-success" name="actualizar">
          Actualizar
		</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>