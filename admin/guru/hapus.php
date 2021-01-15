<?php 
	include "../../config.php";
	$id = $_GET['id'];
	$sql = mysqli_query($connect, "DELETE FROM guru where id = '$id'");
	header("Location:index.php");
?>