<?php 
  include '../../../config.php';
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['kode_kelas']==""){
      header("location:../../../index.php?pesan=gagal");
  } 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SD Unggulan Muhammadiyah Kretek</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-info navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link text-white">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link text-white">Contact</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <div class="btn-group dropleft mr-1">
        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pilihan
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="profil/">Profil Pengguna</a>
          <a class="dropdown-item" href="../../../check/logout.php">Keluar</a>
        </div>
      </div>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="justify-content-center user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../../dist/img/smuk.gif" class="img-circle elevation-6" alt="User Image" style="height: 100px; width: 100px;">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <!-- Daftar Kelas -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Table Nilai Siswa
                <i class="fas fa-angle-left right text-info"></i>
              </p>
            </a>

            <!-- Kelas 1 -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="kelas_1a.php" class="nav-link active">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Nilai Siswa Kelas 1A</p>
                </a>
              </li>
              <!-- End of kelas -->

            </ul>
            <li class="nav-item has-treeview">
            <a href="input_nilai.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Input Nilai 1A
              </p>
            </a>
          </li>
        </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Nilai</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Nilai Siswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    	<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
		    <div class="form-group">
		        <label for="sel1">Select list:</label>
		        <select class="form-control" name="nilai">
		            <?php
		            //Perintah sql untuk menampilkan semua data pada tabel jurusan
		            $sql="SELECT siswa.nis as nis, siswa.nama_siswa as nama_siswa, kelas.kode_kelas as kode_kelas, mata_pelajaran.nama_mapel as nama_mapel, penilaian.kategori_nilai as kategori_nilai from kelas join siswa on kelas.kode_kelas=siswa.kode_kelas join penilaian on siswa.nis=penilaian.nis join mata_pelajaran on penilaian.kode_mapel=mata_pelajaran.kode_mapel where kelas.kode_kelas='1A'";

		            $hasil=mysqli_query($connect,$sql);
		            $no=0;
		            while ($data = mysqli_fetch_array($hasil)) {
		            $no++;

		            $ket="";
		            if (isset($_GET['mata_pelajaran'])) {
		                $nilai = trim($_GET['mata_pelajaran']);

		                if ($nilai==$data['nama_mapel'])
		                {
		                    $ket="selected";
		                }
		            }
		            if (isset($_GET['penilaian'])) {
		                $nilai = trim($_GET['penilaian']);

		                if ($nilai==$data['kategori_nilai'])
		                {
		                    $ket="selected";
		                }
		            }
		            ?>
		            <option <?php echo $ket; ?> value="<?php echo $data['nama_mapel'];?>"><?php echo $data['nama_mapel'];?></option>
		            <option <?php echo $ket; ?> value="<?php echo $data['kategori_nilai'];?>"><?php echo $data['kategori_nilai'];?></option>
		            <?php
			}
		  ?>
		        </select>
		    </div>
		    <div class="form-group">
		        <input type="submit" class="btn btn-info" value="Pilih">
		    </div>
		</form>
		<table class="table table-bordered table-hover">
        <br>
        <thead>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kategori Nilai</th>
            <th>Nilai</th>
        </tr>
        </thead>
        <?php


        if (isset($_GET['2'])) {
            $jurusan=trim($_GET['jurusan']);
            $sql="SELECT * FROM mahasiswa where jurusan='$jurusan' order by nik asc";
        }else {
            $sql="select * from mahasiswa order by nik asc";
        }


        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["nik"]; ?></td>
                <td><?php echo $data["nama"];   ?></td>
                <td><?php echo $data["jk"];   ?></td>
                <td><?php echo $data["tanggal_lhr"];   ?></td>
                <td><?php echo $data["jurusan"];   ?></td>
                <td><?php echo $data["umur"];   ?></td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
    </section>
  </div>
    <!-- /.content -->
  <!-- /.content-wrapper -->
  <center><footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="#">SD Unggulan Muhammadiyah Kretek</a>.</strong> All rights
    reserved.
  </footer></center>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
