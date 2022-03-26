<?php 
session_start();
if(isset($_SESSION['adminVerification']))
    header("Location:src/pages/home.php");
else
    header("Location:src/pages/signin.php");
?>