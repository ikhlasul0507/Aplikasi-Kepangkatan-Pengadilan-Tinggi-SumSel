<?php

session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: konten.php");
	exit;
}

require 'config.php';

$query = mysqli_query($conn, "SELECT * FROM daftar WHERE username = 'admin'");
$row_query = mysqli_fetch_array($query);

 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
 <link rel="icon" type="image/png" href="img/logo.png">
  <title>Daftar Urut Kepangkatan</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/kepangkatan.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center shadow-sm-10 " href="konten.php" style="background-color: white">
        <div class="sidebar-brand-icon">
          <img src="img/kejaksaan.png" style="border: 3px ; width: 60px; height: 60px">
        </div>
        <div class="sidebar-brand-text mx-3 font-weight-bold text-secondary" ><b>KEJAKSAAN TINGGI SUMSEL</b></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="konten.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>HALAMAN UTAMA</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Database
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-book"></i>
          <span>Komponen Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data Pegawai</h6>
           
            <a class="collapse-item" href="?halaman=kejati_sumsel">KEJATI SUMSEL </a>
          </div>
        </div>
      </li>

     

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Perusahaan
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-book"></i>
          <span>Laporan</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Laporan</h6>
           
            <a class="collapse-item" href="?halaman=laporan_kejati_sumsel">KEJATI SUMSEL</a>
            </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="http://www.kejati-sumsel.go.id" target="_blank">
          <i class="fas fa-fw fa-home"></i>
          <span>Tentang Perusahaan</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="https://api.whatsapp.com/send?phone=6281274207428&text=Halo%20Admin%20Saya%20Mau%20Bertanya ?" target="_blank">
          <i class="fas fa-fw fa-address-card"></i>
          <span>Kontak</span></a>
      </li>

      <!-- Nav Item - Tables -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-green topbar mb-4 static-top shadow navbar-inverse navbar-fixed-top breakpoint-off d-flex">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-map"></i>
          </button>
             <a href="https://goo.gl/maps/GQNA8bRugri5YXi96" target="blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-map fa-sm text-white-50"></i> Lokasi</a>
          
          <!-- Topbar Search 
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
            -->

          <!-- Topbar Navbar --> 
          <ul class="navbar-nav ml-auto ">
             
             <marquee><div class="sidebar-brand-text mx-3 font-weight-bold text-secondary container-fluid  align-right"  > <br>Jl. Gubernur H. A Bastari, Seberang Ulu I, Kota Palembang, Sumatera Selatan 30257, (0711) 310936</div></marquee>
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?php echo $row_query['nama'] ?></span>
                <img class="img-profile rounded-circle" src="img/logo.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="?halaman=profil">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid col-lg-12">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h4 mb-0 text-gray-800 "><b>Sistem Informasi Daftar Urut Kepangkatan Kejaksaan Tinggi Negeri Sumatera Selatan</b></h2>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>
          <hr>
          <!-- Content Row -->

          <?php
			if(isset($_GET['halaman'])){
        if($_GET['halaman']=="kejati_palembang"){include "kejati_palembang.php";}
        if($_GET['halaman']=="kejati_sumsel"){include "kejati_sumsel.php";}
				if($_GET['halaman']=="laporan_kejati_palembang"){include "laporan_kejati_palembang.php";}
        if($_GET['halaman']=="laporan_kejati_sumsel"){include "laporan_kejati_sumsel.php";}
        if($_GET['halaman']=="profil"){include "profil.php";}
        if($_GET['halaman']=="ubahdata"){include "ubahdata.php";}
        if($_GET['halaman']=="editprofil"){include "editprofil.php";}
				
			}
			else{
			?>
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                        <div class="bd-example">
                            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                              </ol>
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img src="img/foto_.png" class="d-block w-100 h-60" alt="...">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="img/bg.jpg" class="d-block w-100 h-60" alt="...">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                  </div>
                                </div>
                                <div class="carousel-item">
                                  <img src="img/foto_234567.png" class="d-block w-100 h-60" alt="...">
                                  <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                  </div>
                                </div>
                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                          </div>

                </div
			><?php
			}
			?>
          <div class="row">
            <!-- Content Column -->
            <div class="col-lg-6 mb-4">
            </div>
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
      <br>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container ">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Renda</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin, Ingin Keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Keluar" Jika Ingin Keluar, Pilih Batal Untuk Membatalkan !</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="index.php">Keluar</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
 
  <!-- Page level custom scripts -->
  
  <script src="js/script.js"></script>

 

</body>

</html>
