<?php include ("db.php")?>

<?php   include("includes/sesion.php");?>
<?php include ("includes/header.php")?>

<div class="container p-4">
	
	<div class="row">
		
		<div class="col-md-12">

			<div class="card card-body">
				<form action="generar_denuncia.php" method="POST">
					<div class="form-group">
					<center><h3> <span class="badge badge-dark">DENUNCIA CIUDADANA </span></h3></center>	
						<select class="custom-select" type="submit" name="tipo" class="form-control" placeholder="Tipo de Denuncia" autofocus="">
						  <option value="">Tipo de Denuncia</option>
						  <option value="Bache">Bache</option>
						  <option value="Animal Muerto">Animal Muerto</option>
						  <option value="Arroyo Corriendo">Arroyo Corriendo</option>
						  <option value="Falla de Alumbrado">Falla de Alumbrado</option>
						  <option value="Incendio en Terreno Baldio">Incendio en Terreno Baldio</option>
						  <option value="Bandalismo">Bandalismo</option>
						  <option value="Bandalismo">Carro Abandonado</option>
						</select>
					</div>
					<div class="form-group">
						<textarea name="comentario" rows="2" class="form-control" placeholder="Comentario"></textarea>
					</div>

					<div class="form-group">
				    	<h5> <span class="badge badge-info">Suba una Imagen del Problema </span></h5>
				   	    <input type="file" name="imagen" class="form-control-file" id="subirImagen">

				    </div>
				    <h5> <span class="badge badge-info">Señale el Lugar del Problema </span></h5>

				   <?php include ("map.php") ?>

					<input type="submit" class="btn btn-success btn-block" name="generar_denuncia" value="Generar Denuncia">

  

				</form>
			</div>


			
		</div>

		

	</div>

</div>

<?php
include("includes/footer.php");
?>