<?php 
include "../../../config.php";
$nis = $_GET['nis'];
$sql = mysqli_query($connect, "DELETE FROM siswa where nis = '$nis'");
header("Location:kelas_1a.php");
?>