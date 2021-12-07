<?php

session_start();
// cek apakah ada session yg aktif
if( !isset($_SESSION["login"]) ) {

  header("location: ../examples/login.php");
  exit();
}

// konek ke mysql
require_once ("../../../database/koneksi.php");

// mengeksekusi tampilan data MySql query armada di dropdown input paket
$query = "SELECT * FROM `armada`";
$dataArmada = mysqli_query($mysqli, $query);

// aksi edit armada
$arm=[];
if(isset($_GET["kd"])) {
$sql6 = mysqli_query($mysqli, "SELECT * FROM armada WHERE id_armada = " . $_GET['kd']);
$arm = mysqli_fetch_assoc($sql6);
}

// panggil query mysql proses simpan armada, paket, petugas
require ("../../../database/input.php");

// menangkap data berdasar tmbol edit yg diklik di form table
$dt=[];
if(isset($_GET["kode"])) {
$sql5 = mysqli_query($mysqli, "SELECT * FROM paket WHERE id_paket = " . $_GET['kode']);
$dt = mysqli_fetch_assoc($sql5);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		  <!-- Preloader -->
		  <div class="preloader flex-column justify-content-center align-items-center">
			  <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
		  </div>

		  <!-- Navbar -->
		  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
				<ul class="navbar-nav">
					<li class="nav-item">
					  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
					</li>
					<li class="nav-item d-none d-sm-inline-block">
					  <a href="general.php" class="nav-link">Home</a>
					</li>
					<li class="nav-item d-none d-sm-inline-block">
					  <a href="../examples/logout.php" class="nav-link">Logout</a>
					</li>
				</ul>
			  <!-- Main Sidebar Container -->
			  <aside class="main-sidebar sidebar-dark-primary elevation-4">
				<!-- Brand Logo -->
				<a href="" class="brand-link">
				  <img src="../../dist/img/Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				  <span class="brand-text font-weight-light">Admin</span>
				</a>

				<!-- Sidebar Search Form -->
				<!-- <div class="form-inline">
				  <div class="input-group" data-widget="sidebar-search">
					<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
					  <div class="input-group-append">
						<button class="btn btn-sidebar">
							<i class="fas fa-search fa-fw"></i>
						</button>
					  </div>
				  </div>
				</div> -->
		  
				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					  <!-- Add icons to the links using the .nav-icon class
						with font-awesome or any other icon font library -->          
						  <li class="nav-item">
							  <a href="" class="nav-link">
								<i class="nav-icon fas fa-table"></i>
								<p>
								  Form
								  <i class="fas fa-angle-left right"></i>
								</p>
							  </a>
							<ul class="nav nav-treeview">
							  <li class="nav-item">
								<a href="general.php" class="nav-link">
								  <i class="far fa-circle nav-icon"></i>
								  <p>Form General Input</p>
								</a>
							  </li>
							  <li class="nav-item">
								<a href="../tables/table.php" class="nav-link">
								  <i class="far fa-circle nav-icon"></i>
								  <p>Form Data View</p>
								</a>
							  </li>
							</ul>
						  </li>
						  <!-- <li class="nav-header">EXAMPLES</li>
                  <li class="nav-item">
                    <a href="pages/gallery.html" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>Gallery</p>
                    </a>
                  </li>
              </li> -->
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</aside>
          <!-- / .Main Sidebar Container -->
		</nav>
	</div>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">	    
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>General Form</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="general.php">Home</a></li>
                <li class="breadcrumb-item active">General Form</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      <!-- </section> -->
	<!-- /.Content Header (Page header) -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">  
                    <!-- form start armada-->
                    <form action="../../../database/aksi_edit.php" method="post">
                                <div class="card card-info">
                                    <div class="card-header">
                                          <h3 class="card-title">Isi Armada (Jenis Kendaraan)</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="id">Id Armada</label>
                                            <input id= "id" name= "id" class="form-control" type="number" placeholder="Id" value="<?=count($arm) != 0 ? $arm['id_armada'] : ""; ?>" readonly />
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_armada">Nama Armada</label>
                                            <input id= "nama_armada" name= "nama_armada" class="form-control" type="text" placeholder="Nama Armada" value="<?=count($arm) != 0 ? $arm['armada'] : ""; ?>" required />
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                            <input type= "submit" value= "ubah" name= "updt" class= "btn btn-primary">
                                            <input class="btn btn-danger" type="reset" name="cancel" value="clear">
                                    </div>
                                </div>
                    </form>
          
                    <!-- form start paket-->
              <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Isi Data Paket</h3>
                    </div>
                    <form action="../../../database/aksi_edit.php" method="post" enctype="multipart/form-data">
                      <div class="card-body">
                          <div class="form-group">
                                    <label for="id_paket">Id Paket</label>
                                    <input id= "id_paket" name="id_paket" class="form-control" type="text" placeholder="Terisi Otomatis" value="<?=count($dt) != 0 ? $dt['id_paket'] : ""; ?>" readonly />
                          </div>
                          <div class="form-group">
                                    <label for="nama_paket">Nama Paket</label>
                                    <input id= "nama_paket" name="nama_paket" class="form-control" type="text" placeholder="Nama Paket" value="<?=count($dt) != 0 ? $dt['nama_paket'] : ""; ?>" required />
                          </div>
                          <div class="form-group">
                                    <label for="kota_wisata">Kota Wisata</label>
                                    <input id= "kota_wisata" name="kota_wisata" class="form-control" type="text" placeholder="Kota Wisata" value="<?=count($dt) != 0 ? $dt['kota_wisata'] : ""; ?>" required />
                          </div>
                          <div class="form-group">
                                    <label for="destinasi">Destinasi</label>
                                    <textarea class="form-control" id="destinasi" name="destinasi" rows="3"><?=count($dt) != 0 ? $dt['destinasi'] : ""; ?></textarea>
                          </div>
                          <div class="form-group">
                                    <label for="fasilitas">Fasilitas</label>
                                    <textarea class="form-control" id="fasilitas" name="fasilitas" rows="3"><?=count($dt) != 0 ? $dt['fasilitas'] : ""; ?></textarea>
                          </div>
                          <div class="form-group">
                                    <label for="armada">Armada</label>
                          
                                                <select class="form-control" id="armada" name="armada">
                                                    <option value="0">--Pilih Jenis Armada--</option>

                                                    <?php foreach($dataArmada as $data) { ?>
                                                        <!-- cara1 menampilkan data -->
                                                    <!-- <option value=""><?=$data['armada'] ?></option> -->

                                                        <!-- cara2 menampilkan data -->
                                                    <option value="<?=$data['id_armada'] ?>" <?=$data["id_armada"] ==$dt['id_armada'] ? "selected" : "" ?>><?php echo $data['armada'] ?></option>
                                                    <?php }?>
                                                </select>                                
                          </div>
                          <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input id="harga" name="harga" class="form-control" type="number" placeholder="harga" value="<?=$dt['harga'];?>" required />
                          </div>
                          <div class="form-group">
                                    <label for="exampleInputFile">Insert Gambar Paket</label>
                                    <input type="file" id="gambar" name="gambar" class="form-control-file" <?=count($dt) != 0 ? "" : "required"; ?>/>     
                          </div>
                          <div class="card-footer">
                            <input type="submit" value="update" name="update" class="btn btn-primary">
                            <input class="btn btn-danger" type="reset" name="cancel" value="clear">
                          </div>
                      </div>					 
                    </form>
                    <!-- / .form start -->
              </div>

                <!-- general form elements -->
              <div class="card card-primary">       
                              </div>
                                <!-- /.card-body -->
                              </div>
                  
                    <div class="col-md-6">
                          <!-- general form elements -->
                          <div class="card card-danger">
                              <div class="card-header">
                                    <h3 class="card-title">Daftar Admin</h3>
                              </div>
                          
                              <!-- form start -->
                              <form action="" method="post">
                                <div class="card-body">
                            
                                  <div class="form-group">
                                            <label for="id_petugas">Id Petugas</label>
                                            <input id= "id_petugas" name= "id_petugas" class="form-control" type="text" placeholder="Id Petugas" required />
                                  </div>
                                  <div class="form-group">
                                            <label for="nama_petugas">Nama Petugas</label>
                                            <input id= "nama_petugas" name= "nama_petugas" class="form-control" type="text" placeholder="Nama Petugas" required />
                                  </div>
                                  <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
                                  </div>
                                  <div class="form-group">
                                            <label for="user_login">User Login</label>
                                            <input id= "user_login" name= "user_login" class="form-control" type="text" placeholder="User Login" required />
                                  </div>
                                  <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name= "password" class="form-control" id="password" placeholder="Password" required>
                                  </div>
                                  <div class="card-footer">
                                            <input type= "submit" name="register" value= "register" class= "btn btn-primary">
                                            <input class="btn btn-danger" type="reset" name="cancel" value="clear">
                                  </div>
                                </div>
                                <!-- /.card-body -->
                              </form>
                              <!--/.form start-->
                          </div>

                          <!-- general form elements -->
                          <div class="card card-success">
                              <div class="card-header">
                                    <h3 class="card-title">Pengaturan SEO</h3>
                              </div>
                          
                              <!-- form start seo -->
                              <form action="../../../database/input.php" method="post">
                                <div class="card-body">
                            
                                  <div class="form-group">
                                            <label for="description">Description</label>
                                            <input id= "description" name= "description" class="form-control" type="text" placeholder="description" required />
                                  </div>
                                  <div class="form-group">
                                            <label for="keywords">Keywords</label>
                                            <input id= "keywords" name= "keywords" class="form-control" type="text" placeholder="keywords" required />
                                  </div>
                                  <div class="form-group">
                                            <label for="author">Author</label>
                                            <input type="text" name="author" class="form-control" id="author" placeholder="author" required>
                                  </div>
                                  <div class="form-group">
                                            <label>Robots Index</label>
                                            <div class="form-check">
                                              <input class="form-check-input" id="index" name= "robots_index" type="radio" value="1" required />
                                              <label class="form-check-label" for="index">Index</label>
                                            </div>
                                            <div class="form-check disable">
                                              <input class="form-check-input" id="noindex" name= "robots_index" type="radio" value="0" required />
                                              <label class="form-check-label" for="noindex">No-Index</label>
                                            </div>
                                  </div>
                                  <div class="form-group">
                                            <label>Robots Follow</label>
                                            <div class="form-check">
                                              <input class="form-check-input" id="follow" name= "robots_follow" type="radio" value="1" required />
                                              <label class="form-check-label" for="follow">Follow</label>
                                            </div>
                                            <div class="form-check disable">
                                              <input class="form-check-input" id="nofollow" name= "robots_follow" type="radio" value="0" required />
                                              <label class="form-check-label" for="nofollow">No-Follow</label>
                                            </div>
                                  </div>
                                  
                                  <div class="card-footer">
                                            <input type= "submit" name="klik" value= "saved" class= "btn btn-primary">
                                            <input class="btn btn-danger" type="reset" name="cancel" value="clear">
                                  </div>
                                </div>
                                <!-- /.card-body -->
                              </form>
                              <!--/.form start-->
                          </div>
                    </div> 
              </div>
            <!-- general form elements -->
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  </div>  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2021 <a href="">All Senses Journey</a>.</strong> All rights reserved.
  </footer>
  <!-- /.content-wrapper -->
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->


<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
