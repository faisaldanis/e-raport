
	<?php

		include "../../../config.php";
		$nis = $_POST['nis'];
		$kode_mapel = $_POST['kode_mapel'];
		$kategori_nilai = $_POST['kategori_nilai'];
		$nilai = $_POST['nilai'];

		$data = mysqli_query($connect, "INSERT INTO penilaian(nis, kode_mapel, kategori_nilai, nilai) VALUES ('$nis', '$kode_mapel', '$kategori_nilai', '$nilai')");
		if ($data) {
			header("location:input_nilai.php?pesan=datasaved");
		}
		else{
			echo "<div class='alert alert-danger text-center mt-4' style='font-size:80px;' role='alert'>EROR 404<br><a href='input.php'><button class='btn btn-danger justify-content-center'>Kembali</button></a></div>";
		}
		$no++;
	?>