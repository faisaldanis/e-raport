<?php 
include "../../config.php";
		$kode_kelas = $_POST['kode_kelas'];
		$nama_kelas = $_POST['nama_kelas'];
		$nis = $_POST['nis'];
		$id = $_POST['id'];

		$data = mysqli_query($connect, "INSERT INTO kelas(kode_kelas, nama_kelas, nis, id) VALUES ('$kode_kelas', '$nama_kelas', '$nis', '$id')");
		if ($data) {
			header("location:index.php?pesan=berhasil");
		}
		else{
			echo "gagal";
		}
?>


