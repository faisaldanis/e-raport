<?php 
session_start();
include '../config.php';
$id = $_POST['id'];
$password = $_POST['password'];

$login = mysqli_query($connect,"SELECT * FROM guru where id='$id' and password='$password'");
$cek = mysqli_num_rows($login);
//Cek Login Guru
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	//If untuk 1A
	if($data['kode_kelas']=="1A"){
		$_SESSION['id'] = $id;
		$_SESSION['kode_kelas'] = "1A";
		header("location:../guru/tables/1A/");
	}
	// If untuk 1B
	else if($data['kode_kelas']=="1B"){
		$_SESSION['id'] = $id;
		$_SESSION['kode_kelas'] = "1B";
		header("location:../guru/tables/1B/");
	}
	// If untuk 2A
	else if($data['kode_kelas']=="2A"){
		$_SESSION['id'] = $id;
		$_SESSION['kode_kelas'] = "2A";
		header("location:../guru/tables/2A/");
	}
	// If untuk 2B
	else if($data['kode_kelas']=="2B"){
		$_SESSION['id'] = $id;
		$_SESSION['kode_kelas'] = "2B";
		header("location:../guru/tables/2B/");
	}
	// If untuk 3A
	else if($data['kode_kelas']=="3A"){
		$_SESSION['id'] = $id;
		$_SESSION['kode_kelas'] = "3A";
		header("location:../guru/tables/3A/");
	}
	// If untuk 3B
	else if($data['kode_kelas']=="3B"){
		$_SESSION['id'] = $id;
		$_SESSION['kode_kelas'] = "3B";
		header("location:../guru/tables/3B/");
	}

	else if($data['kode_kelas']=="4A"){
		$_SESSION['id'] = $id;
		$_SESSION['kode_kelas'] = "4A";
		header("location:../guru/tables/4A/");
	}

	else if($data['kode_kelas']=="4B"){
		$_SESSION['id'] = $id;
		$_SESSION['kode_kelas'] = "4B";
		header("location:../guru/tables/4B/");
	}

	else if($data['kode_kelas']=="5A"){
		$_SESSION['id'] = $id;
		$_SESSION['kode_kelas'] = "5A";
		header("location:../guru/tables/5A/");
	}

	else if($data['kode_kelas']=="5B"){
		$_SESSION['id'] = $id;
		$_SESSION['kode_kelas'] = "5B";
		header("location:../guru/tables/5B/");
	}

	else if($data['kode_kelas']=="6A"){
		$_SESSION['id'] = $id;
		$_SESSION['kode_kelas'] = "6A";
		header("location:../guru/tables/6A/");
	}

	else if($data['kode_kelas']=="6B"){
		$_SESSION['id'] = $id;
		$_SESSION['kode_kelas'] = "6B";
		header("location:../guru/tables/6B/");
	}

	//Jika inputan tidak sesuai database
	else{
		header("location:../index.php?pesan=gagal2");
	}

	
}else{
	header("location:../index.php?pesan=gagal1");
}



?>


