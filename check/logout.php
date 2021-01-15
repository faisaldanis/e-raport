<?php 
session_start();
session_destroy();
 
// Balik lagi ke login
header("location:../index.php");
?>


