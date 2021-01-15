<?php 
include "../../../config.php";
		$nis = $_POST['nis'];
		$nama_siswa = $_POST['nama_siswa'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$alamat = $_POST['alamat'];
		$kode_kelas = $_POST['kode_kelas'];

		$data = mysqli_query($connect, "INSERT INTO siswa(nis, nama_siswa, jenis_kelamin, alamat, kode_kelas) VALUES ('$nis', '$nama_siswa', '$jenis_kelamin', '$alamat', '$kode_kelas')");
		if ($data) {
			header("location:index.php?pesan=berhasil");
		}
		else{
			echo "gagal";
		}
?>


