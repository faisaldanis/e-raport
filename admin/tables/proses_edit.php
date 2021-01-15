
<?php 
include "../../config.php";
	$nis_lama = $_POST['nis_lama'];
	$nis = $_POST['nis'];
	$nama_siswa = $_POST['nama_siswa'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$kode_kelas = $_POST['kode_kelas'];

	
	$data = mysqli_query($connect, "UPDATE siswa SET nis='$nis', nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin', alamat='$alamat', kode_kelas='$kode_kelas' WHERE nis='$nis_lama'");
	$data2 = mysqli_query($connect, "DELETE FROM siswa WHERE nis='$nis_lama'");
	if ($data) {
		header("location:siswa.php?pesan=berhasil");
	}
	else{
		echo "gagal";
	}
?>