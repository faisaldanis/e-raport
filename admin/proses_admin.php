<?php 
include "../config.php";
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$hak_akses = $_POST['hak_akses'];

		$data = mysqli_query($connect, "INSERT INTO admin(id, nama, hak_akses) VALUES ('$id', '$nama', '$hak_akses')");
		if ($data) {
			header("location:input_admin.php?pesan=berhasil");
		}
		else{
			echo "gagal";
		}
?>


