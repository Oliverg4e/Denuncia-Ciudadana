<?php
include_once 'includes/header.php';
session_start();
 
if(isset($_SESSION['IdUsuario'])) {
    session_destroy();
    unset($_SESSION['IdUsuario']);
    //unset($_SESSION['usr_name']);
    header("Location: log.php");
} else {
    header("Location: log.php");
}
?>