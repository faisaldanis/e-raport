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

  <?php
  include '../../../config.php';
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['kode_kelas']==""){
      header("location:../../../index.php?pesan=gagal");
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
    <div class="sidebar">
      <!-- Sidebar -->
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

          <li class="nav-item has-treeview">
            <a href="input_nilai.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Input Nilai 1A
              </p>
            </a>
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
            <h1>Data Nilai Siswa Kelas 1A</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Data Nilai Siswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- /.row -->
        <!-- Main row -->
        <?php 
          if(isset($_GET['pesan'])){
          $pesan = $_GET['pesan'];
          if($pesan == "datasaved"){ ?>
            <div class="row justify-content-center">
              <div class="col-md-12 mt-4 mb-2">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                      Data Berhasil di Masukkan
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php }
          else if ($pesan == "berhasilinput") { ?>
            <div class="row justify-content-center">
              <div class="col-md-11 mt-4 mb-2">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="alert alert-primary alert-dismissible fade show mt-3" role="alert">
                        Data Berhasil di Masukkan
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } }?>
        <div class="row">
          <!-- Left col -->


          <!-- Form Input -->

          <section class="col-lg-5 connectedSortable">
            <div class="card card-info">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-edit mr-1"></i>
                  Input Nilai Siswa
                </h3>
              </div>
              <form role="form" action="proses_nilai.php" method="POST" class="mb-5">
                <div class="card-body text-dark">

                  <label for="nis">Nomor Induk Siswa</label>
                  <div class="input-group mb-1">
                    <input type="text" class="form-control" id="NIS" placeholder="Masukkan NIS" name="nis">
                  </div>

                  <label for="kode_mapel">Kode Mata Pelajaran</label>
                  <div class="input-group mb-1">
                    <input type="text" class="form-control" id="kd1" placeholder="Kode Mata Pelajaran" name="kode_mapel">
                  </div>

                  <div class="form-group">
                  <label>Kategori Nilai</label>

                  <select name="nama_siswa" id="nama_siswa">
                    <option disabled selected> Pilih </option>
                     <?php 
                      $sql=mysqli_query("SELECT * FROM siswa where kode_kelas='1A'");
                      while ($data=mysqli_fetch_array($sql)) {
                      ?>
                       <option value="<?php echo "$nis" ?>"></option> 
                     <?php
                      }
                     ?>
                  </select>




                    <select name="kategori_nilai" class="form-control">
                      <option value="KD1">KD1</option>
                      <option value="KD2">KD2</option>
                      <option value="KD3">KD3</option>
                      <option value="Ulangan Harian">Ulangan Harian</option>
                      <option value="Tugas">Tugas</option>
                      <option value="PTS">PTS</option>
                      <option value="UAS">UAS</option>
                    </select>
                  </div>

                  <label for="nilai">Nilai</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="nilai" placeholder="Masukkan Nilai" name="nilai">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary" style="margin-left: 20px">Masukkan</button><button type="reset" class="btn btn-danger" style="margin-left: 20px">Batal</button>
              </form>
            </div>
            <!-- /.card -->
          </section>


          <!-- End of Form Input -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-users mr-1"></i>
                  Nilai Siswa Kelas 1A Yang Sudah Masuk
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <table id="1A" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIS</th>
                  <th>Nama Siswa</th>
                  <th>Nama Mapel</th>
                  <th>Kategori Nilai</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <?php


                    $sql = mysqli_query($connect, "SELECT penilaian.nis as nis, penilaian.kategori_nilai as kategori_nilai, siswa.nama_siswa as nama_siswa, penilaian.kode_mapel as kode_mapel, mata_pelajaran.nama_mapel as nama_mapel FROM siswa join penilaian on siswa.nis=penilaian.nis join mata_pelajaran on mata_pelajaran.kode_mapel=penilaian.kode_mapel where kode_kelas='1A' limit 6");


                        foreach ($sql as $data) {
                          echo "<td>$data[nis]</td>";
                          echo "<td>$data[nama_siswa]</td>";
                          echo "<td>$data[nama_mapel]</td>";
                          echo "<td>$data[kategori_nilai]</td>";
                          echo "</tr>";
                        }

                    ?>
                </tr>
                </tbody>
              </table>
              <a href="kelas_1a.php" class="btn btn-danger mt-2">Lihat Lebih Banyak Data . . . . .</a>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>

          <!-- Data Siswa -->

          <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-users mr-1"></i>
                  Data Siswa Kelas A
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <table id="1A" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIS</th>
                  <th>Nama Siswa</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <?php


                    $sql = mysqli_query($connect, "SELECT nis, nama_siswa from siswa where kode_kelas='1A'");


                        foreach ($sql as $data) {
                          echo "<td>$data[nis]</td>";
                          echo "<td>$data[nama_siswa]</td>";
                          echo "</tr>";
                        }

                    ?>
                </tr>
                </tbody>
              </table>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>

          <!-- End of Data Siswa -->

          <!-- Data Mapel -->

          <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-users mr-1"></i>
                  Data Mata Pelajaran
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <table id="1A" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kode Mapel</th>
                  <th>Nama Mapel</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <?php


                    $sql = mysqli_query($connect, "SELECT * from mata_pelajaran");


                        foreach ($sql as $data) {
                          echo "<td>$data[kode_mapel]</td>";
                          echo "<td>$data[nama_mapel]</td>";
                          echo "</tr>";
                        }

                    ?>
                </tr>
                </tbody>
              </table>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>

          <!-- End of Data Mapel -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper --><center>
  <footer class="main-footer">
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


