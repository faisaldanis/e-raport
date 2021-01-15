
	<?php

		include "../../../config.php";
		$nis = $_POST['nis'];
		$kode_mapel = $_POST['kode_mapel'];
		$kd1 = $_POST['kd1'];
		$kd2 = $_POST['kd2'];
		$kd3 = $_POST['kd3'];
		$ulangan_harian = $_POST['ulangan_harian'];
		$tugas = $_POST['tugas'];
		$pts = $_POST['pts'];
		$uas = $_POST['uas'];
		$no=1;

		$data = mysqli_query($connect, "INSERT INTO penilaian(nis, kode_mapel, kd1, kd2, kd3, ulangan_harian, tugas, pts, uas) VALUES ('$nis', '$kode_mapel', '$kd1', '$kd2', '$kd3', '$ulangan_harian', '$tugas', '$pts', '$uas')");
		if ($data) {
			header("location:input_nilai.php?pesan=datasaved");
		}
		else{
			echo "gagal";
		}
		$no++;
	?>