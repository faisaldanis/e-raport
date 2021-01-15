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


<?php 

$sql = mysqli_query($connect,"SELECT siswa.nama_siswa as nama_siswa, mata_pelajaran.nama_mapel as nama_mapel, penilaian.nis as nis, penilaian.kode_mapel as kode_mapel, penilaian.kd1 as kd1, penilaian.kd2 as kd2, penilaian.kd3 as kd3, penilaian.ulangan_harian as ulangan_harian, penilaian.tugas as tugas, penilaian.pts as pts, penilaian.uas as uas from siswa join penilaian on siswa.nis=penilaian.nis join mata_pelajaran on penilaian.kode_mapel=mata_pelajaran.kode_mapel where penilaian.nis=$nis"); ?>


