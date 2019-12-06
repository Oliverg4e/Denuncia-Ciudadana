<?php
include("procesoRegAdm.php");
include("includes/HeaderAdmin.php");
?>

    
  </head>
  <body>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="col" id="notification">
                    <?php echo $message_alert; ?>
                </div>
                <div class="regForm">
                    <center><h1> <span class="badge badge-info">Registro Administradores</span></h1></center>    
                    
                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">

                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" name="Nombre" placeholder="Nombre(s)" required>
                        </div>
                        <div class="form-group">
                            <label>Apellido Paterno</label>
                            <input type="text" class="form-control" name="AP" placeholder="Apellido Paterno" required>
                        </div>
                        <div class="form-group">
                            <label>Apellido Materno</label>
                            <input type="text" class="form-control" name="AM" placeholder="Apellido Materno" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="example@email.com" required>
                        </div>
                        
                       
                        
                        <div class="form-group">
                            <label>Fecha de Nacimiento</label>
                            <input type="date" class="form-control" name="Fecha_Nacimiento" required>
                        </div>
                                        
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" class="form-control" name="password" placeholder="Contraseña" maxlength="15" required>
                        </div>
                        <div class="form-group">
                            <label>Confirmar Contraseña</label>
                            <input type="password" class="form-control" name="confirmPassword" placeholder="Confirmar Contraseña" maxlength="15" required>
                        </div>
                        <center><button type="submit" class="btn btn-primary" name="register">Register</button></center>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->






    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-bottom">
    <a href="registroUsuarios.php"  class="navbar-brand">Denuncia Ciudadana</a>
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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
              integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
              crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
      $(document).ready( function() {
        $('#notification').delay(3000).fadeOut();
      });
    </script>



  </body>
  
</html>