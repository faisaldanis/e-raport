<?php 
include "../../../config.php";
$id = $_GET['nis'];
$sql = mysqli_query($connect, "DELETE FROM transaksi where nis = '$nis'");
header("Location:index.php");
?>