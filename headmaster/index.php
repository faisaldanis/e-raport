<?php 
  include '../config.php';
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
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">

  <?php
  include '../config.php';
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['kode_kelas']==""){
      header("location:../index.php?pesan=gagal");
  } 
  ?>
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-info navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index3.html" class="nav-link text-white">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link text-white">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <marquee behavior="scroll" direction="left"><span class="text-info"><a href="../../../dist/img/smuk.gif" style=""></a> <h2>Dashboard Admin - SD Unggulan Muhammadiyah</span><span class="text-danger"> Kretek</h2></span></marquee>
  </nav>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="justify-content-center user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/smuk.gif" class="img-circle elevation-6" alt="User Image" style="height: 100px; width: 100px;">
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
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard Admin
              </p>
            </a>
          </li>
          <!-- Daftar Kelas -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Table Nilai Siswa
                <i class="fas fa-angle-left right text-info"></i>
              </p>
            </a>
            <!-- Kelas 1A -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="tables/1A/" class="nav-link">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Nilai Siswa Kelas 1A</p>
                </a>
              </li>

              <!-- Kelas 1B -->

              <li class="nav-item">
                <a href="tables/1B/" class="nav-link">
                  <i class="nav-icon far fa-circle text-succes"></i>
                  <p>Nilai Siswa Kelas 2B</p>
                </a>
              </li>

              <!-- End of 1B -->

              <!-- 2A -->

              <li class="nav-item">
                <a href="tables/2A/" class="nav-link">
                  <i class="nav-icon far fa-circle text-light"></i>
                  <p>Nilai Siswa Kelas 2A</p>
                </a>
              </li>

              <!-- End of 2A -->

              <li class="nav-item">
                <a href="tables/2B/" class="nav-link">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Nilai Siswa Kelas 2B</p>
                </a>
              </li>

              <!-- End of 2B -->

              <li class="nav-item">
                <a href="tables/3A/" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Nilai Siswa Kelas 3A</p>
                </a>
              </li>

              <!-- End of 3A -->

              <li class="nav-item">
                <a href="tables/3B/" class="nav-link">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Nilai Siswa Kelas 3B</p>
                </a>
              </li>

              <!-- End of 3B -->

              <li class="nav-item">
                <a href="tables/4A/" class="nav-link">
                  <i class="nav-icon far fa-circle text-primary"></i>
                  <p>Nilai Siswa Kelas 4A</p>
                </a>
              </li>

              <!-- End of 4A -->

              <li class="nav-item">
                <a href="tables/4B/" class="nav-link">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Nilai Siswa Kelas 4B</p>
                </a>
              </li>
              <!-- End of 4B -->

              <li class="nav-item">
                <a href="tables/5A/" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Nilai Siswa Kelas 5A</p>
                </a>
              </li>
              <!-- End of 5A -->

              <li class="nav-item">
                <a href="tables/5B/" class="nav-link">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Nilai Siswa Kelas 5B</p>
                </a>
              </li>
              <!-- End of 5B -->

              <li class="nav-item">
                <a href="tables/6A/" class="nav-link">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Nilai Siswa Kelas 6A</p>
                </a>
              </li>
              <!-- End of 6A -->

              <li class="nav-item">
                <a href="tables/6B/" class="nav-link">
                  <i class="nav-icon far fa-circle text-light"></i>
                  <p>Nilai Siswa Kelas 6B</p>
                </a>
              </li>
              <!-- End of 6B -->
              <!-- End of kelas -->
            </ul>
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data Guru
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Form Input
                <i class="fas fa-angle-left right text-danger"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="input_admin.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mapel/" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Mata Pelajaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="guru.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Data guru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="kelas.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Kelas</p>
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0 text-dark">Dashboard Admin</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard Admin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>

                  <?php
                    $data_siswa = mysqli_query($connect, "SELECT * from siswa where kode_kelas='1A'");  
                    $hitung = mysqli_num_rows($data_siswa);
                    echo "<b style='font-size: 50px';>$hitung </b>";
                  ?>
                    
                </h3>
                <h4>Jumlah Siswa 1A</h4>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="tables/1A" class="small-box-footer">Info Lebih <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6 text-white">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>

                  <?php
                    $data_siswa = mysqli_query($connect, "SELECT * from siswa where kode_kelas='1B'");  
                    $hitung = mysqli_num_rows($data_siswa);
                    echo "<b style='font-size: 50px';>$hitung </b>";
                  ?>
                    
                </h3>
                <h4 class="text-white">Jumlah Siswa 1B</h4>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">Info Lebih <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>

                  <?php
                    $data_siswa = mysqli_query($connect, "SELECT * from siswa where kode_kelas='2A'");  
                    $hitung = mysqli_num_rows($data_siswa);
                    echo "<b style='font-size: 50px';>$hitung </b>";
                  ?>
                    
                </h3>
                <h4>Jumlah Siswa 2A</h4>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">Info Lebih <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
                <h3>

                  <?php
                    $data_siswa = mysqli_query($connect, "SELECT * from siswa where kode_kelas='2B'");  
                    $hitung = mysqli_num_rows($data_siswa);
                    echo "<b style='font-size: 50px';>$hitung </b>";
                  ?>
                    
                </h3>
                <h4>Jumlah Siswa 2B</h4>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">Info Lebih <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>

                  <?php
                    $data_siswa = mysqli_query($connect, "SELECT * from siswa where kode_kelas='3A'");  
                    $hitung = mysqli_num_rows($data_siswa);
                    echo "<b style='font-size: 50px';>$hitung </b>";
                  ?>
                    
                </h3>
                <h4>Jumlah Siswa 3A</h4>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">Info Lebih <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>

                  <?php
                    $data_siswa = mysqli_query($connect, "SELECT * from siswa where kode_kelas='3B'");  
                    $hitung = mysqli_num_rows($data_siswa);
                    echo "<b style='font-size: 50px';>$hitung </b>";
                  ?>
                    
                </h3>
                <h4>Jumlah Siswa 3B</h4>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">Info Lebih <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <h3>

                  <?php
                    $data_siswa = mysqli_query($connect, "SELECT * from siswa where kode_kelas='4A'");  
                    $hitung = mysqli_num_rows($data_siswa);
                    echo "<b style='font-size: 50px';>$hitung </b>";
                  ?>
                    
                </h3>
                <h4>Jumlah Siswa 4A</h4>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">Info Lebih <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>

                  <?php
                    $data_siswa = mysqli_query($connect, "SELECT * from siswa where kode_kelas='4B'");  
                    $hitung = mysqli_num_rows($data_siswa);
                    echo "<b style='font-size: 50px';>$hitung </b>";
                  ?>
                    
                </h3>
                <h4>Jumlah Siswa 4B</h4>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">Info Lebih <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="#">SD Unggulan Muhammadiyah Kretek</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
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
