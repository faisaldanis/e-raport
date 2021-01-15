<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login - SD Unggulan Muhammadiyah</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page img">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php">Halaman<b>Login</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
	    <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">
		  <li class="nav-item">
		    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Guru</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Administrasi</a>
		  </li>
		</ul>
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
				<p>Masuk Sebagai Guru</p>
		  		<form action="check/login_guru.php" method="post">
		  			<div class="input-group mb-3">
		          		<input type="text" class="form-control" placeholder="Masukkan ID" id="id" name="id">
		          		<div class="input-group-append">
		            		<div class="input-group-text">
		              		<span class="fas fa-user"></span>
		            		</div>
		          		</div>
		        	</div>
		        	<div class="input-group mb-3">
		          		<input type="password" class="form-control" placeholder="Masukkan Password" id="password" name="password">
		          		<div class="input-group-append">
		            		<div class="input-group-text">
		              		<span class="fas fa-lock"></span>
		            		</div>
		          		</div>
		        	</div>


			        <div class="row">
			          	<div class="col-8">
			        		<button type="submit" class="btn btn-primary btn-block btn-flat"><i class='fas fa-sign-in-alt mr-1'></i> Masuk</button>
			        	</div>
			        	<!-- /.col -->
			        	<div class="col-4">
			          		<button type="reset" class="btn btn-danger btn-block btn-flat"><i class='fas fa-undo'></i> Batal</button>
			        	</div>
			        	<!-- /.col -->
			        </div>
	      		</form>
		  	</div>
		  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
		  	<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
		  		<p>Masuk Sebagai Administrasi</p>
		  		<form action="check/login_admin.php" method="post">
		        	<div class="input-group mb-3">
		          		<input type="text" class="form-control" placeholder="Masukkan ID" id="id" name="id">
		          		<div class="input-group-append">
		            		<div class="input-group-text">
		              		<span class="fas fa-user"></span>
		            		</div>
		          		</div>
		        	</div>
		        	<div class="input-group mb-3">
		          		<input type="password" class="form-control" placeholder="Masukkan Password" id="password" name="password">
		          		<div class="input-group-append">
		            		<div class="input-group-text">
		              		<span class="fas fa-lock"></span>
		            		</div>
		          		</div>
		        	</div>
			        <div class="row">
			        	<div class="col-8">
			        		<button type="submit" class="btn btn-primary btn-block btn-flat"><i class='fas fa-sign-in-alt mr-1'></i> Masuk</button>
			        	</div>
			        	<!-- /.col -->
			        	<div class="col-4">
			          		<button type="reset" class="btn btn-danger btn-block btn-flat"><i class='fas fa-undo'></i> Batal</button>
			        	</div>
			        	<!-- /.col -->
			          
			        </div>
	      		</form>
		  	</div>
		  </div>
		</div>
      </div>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>

<script type="text/javascript">
	function validasi() {
		var id = document.getElementById("id").value;
		var password = document.getElementById("password").value;		
		if (id != "" && password!="") {
			return true;
		}else{
			alert('ID dan Password Harus Diisi');
			return false;
		}
	}
 
</script>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
