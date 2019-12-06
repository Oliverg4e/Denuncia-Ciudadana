<?php
include("db.php");
  $message_alert = '';
  if(isset($_POST['register'])) {
    $Nombre = mysqli_real_escape_string($con,$_POST['Nombre']);
    $AP = mysqli_real_escape_string($con,$_POST['AP']);
    $AM = mysqli_real_escape_string($con,$_POST['AM']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $Fecha_Nacimiento = mysqli_real_escape_string($con,$_POST['Fecha_Nacimiento']);


  function busca_edad($Fecha_Nacimiento){
      $dia=date("d");
      $mes=date("m");
      $ano=date("Y");

      $dianaz=date("d",strtotime($Fecha_Nacimiento));
      $mesnaz=date("m",strtotime($Fecha_Nacimiento));
      $anonaz=date("Y",strtotime($Fecha_Nacimiento));

      if (($mesnaz == $mes) && ($dianaz > $dia)) {
      $ano=($ano-1); }
      if ($mesnaz > $mes) {
      $ano=($ano-1);}
      $edad=($ano-$anonaz);
      return $edad;
  }


 
/*

     echo (busca_edad($Fecha_Nacimiento));

  if (busca_edad($Fecha_Nacimiento)<18) {
        $message_alert = '
          <div class="alert alert-warning">
            <strong>Failed!</strong> edad mala!
          </div>';
      } 
     

*/
    
    $confirmPassword =mysqli_real_escape_string($con,$_POST['confirmPassword']);
   
    $insert = "INSERT INTO usuario(Nombre,AP,AM,email,password,Fecha_Nacimiento) VALUES('$Nombre','$AP','$AM','$email',
    '$password', '$Fecha_Nacimiento')";
    if($password == $confirmPassword) {
        
        if (mysqli_query($con, $insert)) {
            $message_alert = '
            <div class="alert alert-success">
              <strong>Success!</strong> Usuario registrado satisfactoriamente <br>
            </div>';
        } else {
          $message_alert = '
          <div class="alert alert-danger">
            <strong>Failed!</strong> Correo ya existente!
          </div>';
        }
    } else {
        $message_alert = '
          <div class="alert alert-warning">
            <strong>Failed!</strong> Las contraseñas no coinciden!
          </div>';
    } 

        

  
  }
?>