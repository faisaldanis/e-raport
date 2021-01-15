<?php 
  include '../../../config.php';
  $sql = mysqli_query($connect, "SELECT * FROM penilaian");
?>

<?php 
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
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Table Nilai Siswa
                <i class="fas fa-angle-left right text-info"></i>
              </p>
            </a>

            <!-- Kelas 1 -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../tables/kelas_3a.php" class="nav-link active">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Nilai Siswa Kelas </p>
                </a>
              </li>
              <!-- End of kelas -->

            </ul>
            <li class="nav-item has-treeview">
            <a href="input_nilai.php" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Input Nilai 3A
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
            <h1>Data Nilai Siswa Kelas 3A</h1>
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



    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->


          <!-- Form Input -->

          <section class="col-lg-5 connectedSortable">
            <div class="card bg-gradient-info">
                  <div class="card-header border-0">
                    <h3 class="card-title">
                      <i class="fas fa-edit mr-1"></i>
                      Input Nilai Siswa
                    </h3>
                  </div>

                  <div class="card card-primary">
                    <!-- form start -->
                    <form role="form" action="proses_nilai.php" method="POST">
                      <div class="card-body text-dark">

                        <label for="nis">Nomor Induk Siswa</label>
                        <div class="input-group">
                          <input type="text" class="form-control" id="NIS" placeholder="Masukkan NIS" name="nis">
                        </div>

                        <div class="form-group">
                        <label>Kode Mapel</label>
                          <select name="kode_mapel" class="form-control">
                            <option value="01A">Bahasa Indonesia</option>
                            <option value="1H2">Agama Islam</option>
                          </select>
                        </div>

                        <label for="kd1">KD1</label>
                        <div class="input-group">
                          <input type="text" class="form-control" id="kd1" placeholder="Nilai KD1" name="kd1">
                        </div>

                        <label for="kd2">KD2</label>
                        <div class="input-group">
                          <input type="text" class="form-control" id="kd2" placeholder="Nilai KD2" name="kd2">
                        </div>

                        <label for="kd3">KD3</label>
                        <div class="input-group">
                          <input type="text" class="form-control" id="kd3" placeholder="Nilai KD3" name="kd3">
                        </div>

                        <label for="ulangan_harian">Nilai Ulangan Harian</label>
                        <div class="input-group">
                          <input type="text" class="form-control" id="ulangan_harian" placeholder="Nilai Ulangan Harian" name="ulangan_harian">
                        </div>

                        <label for="tugas">Nilai Tugas</label>
                        <div class="input-group">
                          <input type="text" class="form-control" id="tugas" placeholder="Nilai Tugas" name="tugas">
                        </div>

                        <label for="pts">Nilai PTS</label>
                        <div class="input-group">
                          <input type="text" class="form-control" id="pts" placeholder="Nilai PTS" name="pts">
                        </div>

                        <label for="nis">Nilsi UAS</label>
                        <div class="input-group">
                          <input type="text" class="form-control" id="uas" placeholder="Nilai UAS" name="uas">
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


          <!-- End of Form Input -->
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
                <table id="3A" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIS</th>
                  <th>Nama Siswa</th>
                  <th>Kode Mapel</th>
                  <th>Nama Mapel</th>
                  <th>Pilihan Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <?php


                    $sql = mysqli_query($connect, "SELECT penilaian.nis as nis, siswa.nama_siswa as nama_siswa, penilaian.kode_mapel as kode_mapel, mata_pelajaran.nama_mapel as nama_mapel FROM siswa join penilaian on siswa.nis=penilaian.nis join mata_pelajaran on mata_pelajaran.kode_mapel=penilaian.kode_mapel where kode_kelas='3A' ORDER BY nis asc limit 8");


                        foreach ($sql as $data) {
                          echo "<td>$data[nis]</td>";
                          echo "<td>$data[nama_siswa]</td>";
                          echo "<td>$data[kode_mapel]</td>";
                          echo "<td>$data[nama_mapel]</td>";
                          echo "<td><center><a href='detail.php' class='btn btn-primary'>Lihat Detail</a></center></td>";
                          echo "</tr>";
                        }

                    ?>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>NIS</th>
                  <th>Nama Siswa</th>
                  <th>Kode Mapel</th>
                  <th>Nama Mapel</th>
                  <th>Pilihan Aksi</th>
                </tr>
                </tbody>
              </table>
              <a href="kelas_3a.php" class="btn btn-danger mt-2">Lihat Lebih Banyak Data . . . . .</a>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
        </div>
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


