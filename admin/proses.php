<?php 
include "../config.php";
		$id = $_POST['id'];
		$nama_guru = $_POST['nama_guru'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$password = $_POST['password'];
		$hak_akses = $_POST['hak_akses'];
		$kode_kelas = $_POST['kode_kelas'];

		$data = mysqli_query($connect, "INSERT INTO guru(id, nama_guru, jenis_kelamin, password, kode_kelas, hak_akses) VALUES ('$id', '$nama_guru', '$jenis_kelamin', '$password', '$kode_kelas', '$hak_akses')");
		if ($data) {
			header("location:input_guru.php?insert=berhasil");
		}
		else{
			echo "gagal";
		}
?>


