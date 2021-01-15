<?php 
  include '../../../config.php';
  $sql = mysqli_query($connect, "SELECT * FROM penilaian");
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
      <marquee behavior="scroll" direction="left"><span class="text-info"><a href="../../../dist/img/smuk.gif" style=""></a> <h2>SD Unggulan Muhammadiyah</span><span class="text-danger"> Kretek</h2></span></marquee>
  </nav>
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
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
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
                <a href="kelas_1a.php" class="nav-link">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Nilai Siswa Kelas 1A</p>
                </a>
              </li>
              <!-- End of kelas -->
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
            <h3 class="m-0 text-dark">Dashboard Kelas 3A</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard 3A</li>
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
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>

                  <?php
                    $data_siswa = mysqli_query($connect, "SELECT * from siswa where kode_kelas='3A'");  
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
          <div class="col-lg-4 col-6 text-white">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>

                  <?php
                    $data_siswa = mysqli_query($connect, "SELECT * from siswa where jenis_kelamin='laki-laki' and kode_kelas='3A'");  
                    $hitung = mysqli_num_rows($data_siswa);
                    echo "<b style='font-size: 50px';>$hitung </b>";
                  ?>
                    
                </h3>
                <h4 class="text-white">Siswa Laki-Laki</h4>
              </div>
              <div class="icon">
                <i class="ion ion-man"></i>
              </div>
              <a href="#" class="small-box-footer">Info Lebih <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>

                  <?php
                    $data_siswa = mysqli_query($connect, "SELECT * from siswa where jenis_kelamin='perempuan' and kode_kelas='3A'");  
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
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-users mr-1"></i>
                  Siswa Kelas 3A
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

                    $sql = mysqli_query($connect, "SELECT nis, nama_siswa, jenis_kelamin, kode_kelas FROM siswa where kode_kelas='3A' ORDER BY nis asc limit 10");


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
              <p class="btn btn-info mt-3">Lihat Lebih Banyak Data . . . . .</p>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>

          <section class="col-lg-5 connectedSortable">
            <!-- /.card -->

            <!-- solid sales graph -->
            <div class="card bg-gradient-info">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-edit mr-1"></i>
                  Input Data siswa
                </h3>
              </div>

            <div class="card card-primary">
              <!-- form start -->
              <form role="form" action="proses.php" method="POST">
                <div class="card-body text-dark">
                  <label for="nis">Nomor Induk Siswa</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="NIS" placeholder="Masukkan NIS" name="nis">
                  </div>
                  <label for="nama_siswa">Nama Siswa</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="Nama" placeholder="Masukkan Nama" name="nama_siswa">
                  </div>
                  <div class="form-group">
                    <label>Pilihan</label>
                    <select class="form-control" name="jenis_kelamin">
                      <option value="laki-laki">Laki-Laki</option>
                      <option value="perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Alamat Siswa</label>
                    <textarea class="form-control" rows="3" placeholder="Masukkan Alamat" name="alamat"></textarea>
                  </div>
                  <div class="form-group">
                  <label>Pilihan Kelas</label>
                  <select name="kode_kelas" class="form-control">
                    <option value="1A">Kelas 1A</option>
                    <option value="1B">Kelas 1B</option>
                    <option value="2A">Kelas 2A</option>
                    <option value="2B">Kelas 2B</option>
                    <option value="3A">Kelas 3A</option>
                    <option value="3B">Kelas 3B</option>
                    <option value="4A">Kelas 4A</option>
                    <option value="4B">Kelas 4B</option>
                  </select>
                </div>
              </div>
              <button type="submit" class="btn btn-primary" style="margin-left: 20px">Masukkan</button><button type="reset" class="btn btn-danger" style="margin-left: 20px">Batal</button>
             </form>
             <div class="card-footer">
                
              </div>   
            </div>
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
