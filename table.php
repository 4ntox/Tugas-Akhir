<?php

// konek ke mysql
require_once ("../../../database/koneksi.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Input form</title>

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
					  <a href="../examples/login.php" class="nav-link">Logout</a>
					</li>
				</ul>
			  <!-- Main Sidebar Container -->
			  <aside class="main-sidebar sidebar-dark-primary elevation-4">
				<!-- Brand Logo -->
				<a href="#" class="brand-link">
				  <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				  <span class="brand-text font-weight-light">Admin</span>
				</a>

				<!-- Sidebar Search Form -->
				<div class="form-inline">
				  <div class="input-group" data-widget="sidebar-search">
					<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
					  <div class="input-group-append">
						<button class="btn btn-sidebar">
							<i class="fas fa-search fa-fw"></i>
						</button>
					  </div>
				  </div>
				</div>
		  
				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					  <!-- Add icons to the links using the .nav-icon class
						with font-awesome or any other icon font library -->          
						  <li class="nav-item">
							  <a href="#" class="nav-link">
								<i class="nav-icon fas fa-table"></i>
								<p>
								  Form
								  <i class="fas fa-angle-left right"></i>
								</p>
							  </a>
							<ul class="nav nav-treeview">
							  <li class="nav-item">
								<a href="#" class="nav-link">
								  <i class="far fa-circle nav-icon"></i>
								  <p>Form General Input</p>
								</a>
							  </li>
							  <li class="nav-item">
								<a href="table.php" class="nav-link">
								  <i class="far fa-circle nav-icon"></i>
								  <p>Form Data View</p>
								</a>
							  </li>
							</ul>
						  </li>
						  <li class="nav-header">EXAMPLES</li>
						  <li class="nav-item">
							<a href="pages/gallery.html" class="nav-link">
							  <i class="nav-icon far fa-image"></i>
							  <p>
							  Gallery
							  </p>
							</a>
						  </li>
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
              <h1>Table Data View</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Table Data View</li>
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
            <div class="col-md-7">
                <!-- Tabel Armada  -->
              <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Tabel Data Armada</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <table class="table table-sm">
                        <thead>
                          <tr>
                            <th>id_armada</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Nama Armada</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1.</td>
                            <td></td>                            
                            <td></td>                            
                            <td></td>                            
                            <td></td>                            
                            <td></td>                            
                            <td>Mini bus</td>
                            <td></td>                            
                            <td></td>                                                      
                            <td></td>                                                    
                            <td></td>                           
                            <td></td>                                                    
                            <td></td>                           
                            <td></td>                                                    
                            <td>
                                <input class="btn btn-primary" type= "submit" value= "edit" name= "edit" >
                                <input class="btn btn-danger" type="reset" value="delete" name="delete">
                            </td>                                                 
                          <tr>

                        </tbody>
                    </table>
                  </div>
              </div>

                <!-- general form elements -->
              <div class="card card-primary">       
                              </div>
                                <!-- /.card-body -->
                              </div>
                  
                    <div class="col-md-12">
                          <!-- tabel paket -->
                          <div class="card card-info">
                              <div class="card-header">
                                    <h3 class="card-title">Tabel Data Paket</h3>
                                    <div class="card-tools">
                                      <ul class="pagination pagination-sm float-right">
                                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                      </ul>
                                    </div>
                              </div>
                          
                              <!-- tabel start -->
                              <div class="card-body p-0">
                                      <table class="table">
                                        <thead>
                                          <tr>
                                            <th>#id</th>
                                            <th>Nama Paket</th>
                                            <th>Kota Wisata</th>
                                            <th>Destinasi</th>
                                            <th>Fasilitas</th>
                                            <th>Armada</th>
                                            <th>Harga</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1.</td>
                                            <td>Wisata Bolang</td>
                                            <td>Malang City</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, laudantium recusandae debitis temporibus quis non maxime saepe placeat est voluptate molestiae voluptates ut sint. Quaerat est qui recusandae maxime illo?</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae nihil praesentium tenetur sapiente hic doloremque beatae enim laboriosam odio vitae.</td>
                                            <td>Update software</td>
                                            <td>Update software</td>
                                            <td>Update software</td>
                                            <td>
                                                  <button>Edit</button>
                                                  <button>Delete</button>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <!-- /.card-body -->
                                              </div>
                                                <!-- /.card-body -->
                                              </div>
                                    <!-- Tabel admin -->
                                    <div class="col-md-12">
                                          <!-- tabel paket -->
                                          <div class="card card-danger">
                                              <div class="card-header">
                                                    <h3 class="card-title">Data Admin</h3>
                                                    <div class="card-tools">
                                                      <ul class="pagination pagination-sm float-right">
                                                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                                      </ul>
                                                    </div>
                                              </div>
                                          
                                              <!-- tabel start -->
                                              <div class="card-body p-0">
                                                      <table class="table">
                                                        <thead>
                                                          <tr>
                                                            <th style="width: 10px">#id</th>
                                                            <th>Nama Admin</th>
                                                            <th>Email</th>
                                                            <th>User Login</th>
                                                            <th>Password</th>
                                                            <th style="width: 40px">Aksi</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <td>1.</td>
                                                            <td>Hooligan</td>
                                                            <td>@gmail.com</td>
                                                            <td>Update software</td>
                                                            <td>Update software</td>
                                                            <td><button>Edit</button></td>
                                                                <td><button>Delete</button>
                                                            </td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                              </div>
                                                    <!-- /.card-body -->
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
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
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
