<?php include ("db.php")?>



<?php include ("includes/HeaderAdmin.php")?>


<center><div class="col-md-8"></center>
<?php

 

session_start();


 ?>
		
	  <nav class="navbar navbar-expand-lg navbar-Dark bg-dark">

		    <a class="navbar-brand" href="#"></a>
				<form method="post">
				  <div class="form-row align-items-center">
				    <div class="col-auto my-1">
				      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
				      <select name="dropdown", class="custom-select mr-sm-2" id="inlineFormCustomSelect">
				        <option selected>Filtrar</option>
				        <option value="fecha_a">Fecha A</option>
				        <option value="fecha_d">Fecha D</option>
				        <option value="tipo">Tipo</option>
				        <option value="statusC">Completos</option>
				        <option value="statusP">Pendientes</option>
				        <option value="usuario">Usuario</option>
				      </select>
				    </div>
				    <div class="col-auto my-1">
				      
				    </div>
				    <div class="col-auto my-1">
				      <button type="submit", name="submit" class="btn btn-primary">Aplicar</button>
				    </div>
				  </div>
				</form>
	  </nav>
	




	<?php if(isset($_SESSION['message'])){?>
				<div id="notification" class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" data-auto-dismiss  role="alert">
				  <?= $_SESSION['message']?>
				  
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>


				</div>



			<?php session_unset();} ?>


				<table class="table table-bordered">

					<thead>
						<tr>
							<th>Tipo de Denuncia</th>
							<th>Comentario</th>
							<th>Fecha de Denuncia</th>
							
							<th>Imagen</th>
							
							<th>Status</th>		
							<th>Latitud</th>
							<th>Longitud</th>
							<th>Acciones</th>	
							
							
							
						</tr>
					</thead>
					<tbody>
						<?php


		$query = "select *from denuncias ORDER BY Fecha_Hora DESC LIMIT 10 ";
						
			if ($_POST)
			{
			$x = $_POST['dropdown'];
			switch($x)  
			{ 

			case "fecha_a": 

			$query = "select *from denuncias ORDER BY Fecha_Hora DESC LIMIT 10 ";
			break;

			case "fecha_d": 
			$query = "select *from denuncias ORDER BY Fecha_Hora ASC LIMIT 10 ";
			break;

			case "tipo":
			$query ="select *from denuncias ORDER BY tipo DESC LIMIT 10 ";
			break;

			case "statusC": 
			$query ="select *from denuncias WHERE status='Completo' ORDER BY fecha_hora DESC LIMIT 10  ";
			break;

			case "statusP": 
			$query ="select *from denuncias WHERE status='Pendiente' ORDER BY fecha_hora DESC LIMIT 10 ";
			break;

			case "usuario": 
			$query ="select *from denuncias ORDER BY idUsuario DESC LIMIT 10 ";
			break;

			default: $query = "select *from denuncias ORDER BY Fecha_Hora DESC LIMIT 10 ";

			






			  }
		}



						 
						  
						  
						

						//$query = "SELECT * FROM denuncias"; 
						
						$result_task=mysqli_query($con,$query);

						while ($row=mysqli_fetch_array($result_task)) { ?>
							<tr>
								<td><?php echo $row['tipo']?></td>
								<td><?php echo $row['comentario']?></td>
								<td><?php echo $row['fecha_hora']?></td>
								
								<td><?php echo $row['imagen']?>


							 <div style="background-color:black; text-align:center; padding: 5px;">
							  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAwBAMAAACh2TSJAAAALVBMVEUAAADtNTX////3n5/+9fX719f7zMz5tLTzfHzuQED//f31jY3ybGzxXV3wVFRaxp+rAAAAAXRSTlMAQObYZgAAALVJREFUOMut0rENAjEQRNHdC4kY0QBaAQUQX0QAFSAKIKQEKiAA6VqgIkriApuV1x7pQPz0aWwHljLMpZ0CRDBGoXmeghGYKFJsUo90giAImCgV5OJF+oOgKE48MlGgs2VLBIunWesw0a1ZHqF82c7GmmIfUSpgotOly29DFPFJFDEhkgIT/V5mZuvj6XofKrHU6vyI4u37IYi36aN4h5tL7PJyif1dvCgEpapzISbCTEj5R78BZq5A5Ldh2XYAAAAASUVORK5CYII">
							</div>
								</td>
								
								<td><?php echo $row['status']?>
								<td><?php echo $row['latitud']?>
								<td><?php echo $row['longitud']?>
								<td>
									<a href="actualizar.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
									<i class="fas fa-pencil-alt"></i>	
									</a>

									<a href="borrar_denuncia.php?id=<?php echo $row['id']?>" class="btn btn-danger">
									<i class="far fa-trash-alt"></i>
									</a>
								</td>
								
							</tr>




							

						<?php } ?>




						
					</tbody>
					
				</table>
		</div>
		<?php include ("mapaTodo.php")?>
		<?php include ("includes/footer.php")?>
		
