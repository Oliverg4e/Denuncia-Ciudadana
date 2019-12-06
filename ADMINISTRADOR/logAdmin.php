

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Denuncia Ciudadana</title>
	<!-- BOOSTRAP 4 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- FONT AWESOME -->
	<script src="https://kit.fontawesome.com/90045aeee7.js" crossorigin="anonymous"></script>
	

</head>
<body>
	
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="logAdmin.php"  class="navbar-brand">Denuncia Ciudadana</a>
    

    
        
</nav>

<?php
include("loginAdmin.php");
?>


<html>
	<head>
		<title>Login</title>
	</head>
	
	<body>
		<center><h1> <span class="badge badge-info">Login Administradores</span></h1></center>
		<div class="container p-4">
			 <div class="card card-body">
				<div class="col-md-12">
					<div class="regForm">
						<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" > 


							<div class="form-group"><label>Email:</label><input class="form-control" id="email" name="email" type="text" ></div>
							<br />
							<div class="form-group"><label>Contraseña:</label><input class="form-control" id="password" name="password" type="password"></div>
							<br />
							<center><div><input class="btn btn-primary" name="login" type="submit" value="Aceptar"></div> </center>
						</form> 
						
						
						
						<?php if(isset($error)){?>

						<div id="notification" class="alert alert-<?php echo isset($error) ? ($error) : '' ; ?> alert-dismissible fade show" data-auto-dismiss  role="alert">
				 		<?php echo isset($error) ? ($error) : '' ; ?>
				  
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
					

						<?php } ?>




						
					</div>
				</div>
			</div>	
		</div>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-bottom">
		    <a href="log.php"  class="navbar-brand">Denuncia Ciudadana</a>
		    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		        <span class="navbar-toggler-icon"></span>
		    </button>

		    <div class="collapse navbar-collapse" id="navbarCollapse">
		        <div class="navbar-nav">
		            <ul class="navbar-nav mr-auto">

		     
		        
		    </div>
		</nav>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

			
			
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

			
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	</body>

</html>

