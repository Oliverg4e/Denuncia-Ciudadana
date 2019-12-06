<?php
include_once 'includes/HeaderAdmin.php';
session_start();


  
 
if(isset($_SESSION['loginAdmin'])) {
    session_destroy();
    unset($_SESSION['loginAdmin']);
    //unset($_SESSION['usr_name']);
    header("Location: logAdmin.php");
} else {
    header("Location: logAdmin.php");
}
?>