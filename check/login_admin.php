<?php 
session_start();
include '../config.php';
$id = $_POST['id'];
$password = $_POST['password'];

$login = mysqli_query($connect,"SELECT * from admin where id='$id' and password='$password'");
$cek = mysqli_num_rows($login);
//Cek Login
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	//If untuk admin
	if($data['hak_akses']=="Admin"){
		$_SESSION['id'] = $id;
		$_SESSION['hak_akses'] = "Admin";
		// Direct ke halaman Admin
		header("location:../admin/");

	// If untuk KepalaSekolah
	}else if($data['hak_akses']=="Kepsek"){
		$_SESSION['id'] = $id;
		$_SESSION['hak_akses'] = "Kepsek";
		// Direct ke halaman Pegawai
		header("location:../headmaster");
	}

	//Jika inputan tidak sesuai database
	else{
		header("location:../index.php?pesan=gagal");
	}

	
}else{
	header("location:../index.php?pesan=gagal");
}



?>


