
	<?php

		include "../../config.php";
		$kode_mapel = $_POST['kode_mapel'];
		$nama_mapel = $_POST['nama_mapel'];
		$no=1;

		$data = mysqli_query($connect, "INSERT INTO mata_pelajaran(kode_mapel, nama_mapel) VALUES ('$kode_mapel', '$nama_mapel')");
		if ($data) {
			header("location:index.php?pesan=datasaved");
		}
		else{
			echo "gagal";
		}
		$no++;
	?>