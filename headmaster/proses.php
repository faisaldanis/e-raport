<?php 
include "../config.php";
		$id = $_POST['id'];
		$nama_guru = $_POST['nama_guru'];
		$kode_kelas = $_POST['kode_kelas'];

		$data = mysqli_query($connect, "INSERT INTO guru(id, nama_guru, kode_kelas) VALUES ('$id', '$nama_guru', '$kode_kelas')");
		if ($data) {
			header("location:input_guru.php?pesan=berhasil");
		}
		else{
			echo "gagal";
		}
?>


