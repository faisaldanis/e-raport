<?php 
  include '../../../config.php';
  session_start();

  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['hak_akses']==""){
    header("location:../../index.php?pesan=gagal");
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
        <a href="../../../index3.html" class="nav-link text-white">Home</a>
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
          <a class="dropdown-item" href="../../check/logout.php">Keluar</a>
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
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="../../" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard Admin
              </p>
            </a>
          </li>
          <!-- Daftar Kelas -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data Siswa
                <i class="fas fa-angle-left right text-info"></i>
              </p>
            </a>
            <!-- Kelas 1A -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../1A/" class="nav-link">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Data Kelas 1A</p>
                </a>
              </li>

              <!-- Kelas 1B -->

              <li class="nav-item">
                <a href="index.php" class="nav-link active">
                  <i class="nav-icon far fa-circle text-succes"></i>
                  <p>Data Kelas 1B</p>
                </a>
              </li>

              <!-- End of 1B -->

              <!-- 2A -->

              <li class="nav-item">
                <a href="../2A/" class="nav-link">
                  <i class="nav-icon far fa-circle text-light"></i>
                  <p>Data Kelas 2A</p>
                </a>
              </li>

              <!-- End of 2A -->

              <li class="nav-item">
                <a href="../2B/" class="nav-link">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Data Kelas 2B</p>
                </a>
              </li>

              <!-- End of 2B -->

              <li class="nav-item">
                <a href="../3A/" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Data Kelas 3A</p>
                </a>
              </li>

              <!-- End of 3A -->

              <li class="nav-item">
                <a href="../3B/" class="nav-link">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Data Kelas 3B</p>
                </a>
              </li>

              <!-- End of 3B -->

              <li class="nav-item">
                <a href="../4A/" class="nav-link">
                  <i class="nav-icon far fa-circle text-primary"></i>
                  <p>Data Kelas 4A</p>
                </a>
              </li>

              <!-- End of 4A -->

              <li class="nav-item">
                <a href="../4B/" class="nav-link">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Data Kelas 4B</p>
                </a>
              </li>
              <!-- End of 4B -->

              <li class="nav-item">
                <a href="../5A/" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Data Kelas 5A</p>
                </a>
              </li>
              <!-- End of 5A -->

              <li class="nav-item">
                <a href="../5B/" class="nav-link">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Data Kelas 5B</p>
                </a>
              </li>
              <!-- End of 5B -->

              <li class="nav-item">
                <a href="../6A/" class="nav-link">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p>Data Kelas 6A</p>
                </a>
              </li>
              <!-- End of 6A -->

              <li class="nav-item">
                <a href="../6B/" class="nav-link">
                  <i class="nav-icon far fa-circle text-light"></i>
                  <p>Data Kelas 6B</p>
                </a>
              </li>
              <!-- End of 6B -->
              <!-- End of kelas -->
            </ul>
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="../../guru/" class="nav-link">
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
                <a href="../../input_admin.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Input Data Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../mapel/" class="nav-link">
                  <i class="far fa-circle nav-icon text-info"></i>
                  <p>Input Mata Pelajaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../input_guru.php" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Input Data guru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../kelas/" class="nav-link">
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
      <section>
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h3 class="m-0 text-dark">Dashboard Kelas 1B</h3>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard 1A</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      </section>
      <!-- /.content-header -->
    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>

                  <?php
                    $data_siswa = mysqli_query($connect, "SELECT * from siswa where kode_kelas='1B'");  
                    $hitung = mysqli_num_rows($data_siswa);
                    echo "<b style='font-size: 50px';>$hitung </b>";
                  ?>
                    
                </h3>
                <h4>Jumlah Siswa</h4>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">Info Lebih <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <h3>

                  <?php
                    $data_siswa = mysqli_query($connect, "SELECT * from siswa where jenis_kelamin='L' and kode_kelas='1B'");  
                    $hitung = mysqli_num_rows($data_siswa);
                    echo "<b style='font-size: 50px';>$hitung </b>";
                  ?>
                    
                </h3>
                <h4>Siswa Laki-Laki</h4>
              </div>
              <div class="icon">
                <i class="ion ion-man"></i>
              </div>
              <a href="#" class="small-box-footer">Info Lebih <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <h3>

                  <?php
                    $data_siswa = mysqli_query($connect, "SELECT * from siswa where jenis_kelamin='P' and kode_kelas='1B'");  
                    $hitung = mysqli_num_rows($data_siswa);
                    echo "<b style='font-size: 50px';>$hitung </b>";
                  ?>
                    
                </h3>
                <h4>Siswi Perempuan</h4>
              </div>
              <div class="icon">
                <i class="ion ion-woman"></i>
              </div>
              <a href="#" class="small-box-footer">Info Lebih <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-users mr-1"></i>
                  Siswa Kelas 1B
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <table id="1A" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nomor Induk Siswa</th>
                  <th>Nama Siswa</th>
                  <th>Jenis Kelamin</th>
                  <th>Kelas</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <?php 

                    $sql = mysqli_query($connect, "SELECT nis, nama_siswa, jenis_kelamin, kode_kelas FROM siswa where kode_kelas='1B' ORDER BY nis asc limit 10");


                        foreach ($sql as $data) {
                          echo "<td>$data[nis]</td>";
                          echo "<td>$data[nama_siswa]</td>";
                          echo "<td>$data[jenis_kelamin]</td>";
                          echo "<td>$data[kode_kelas]</td>";
                          echo "</tr>";
                        }

                    ?>
                </tr>
                </tbody>
              </table>
              <a href="kelas_1b.php" class="btn btn-primary mt-2">Lihat Lebih Banyak Data . . . . .</a>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
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
