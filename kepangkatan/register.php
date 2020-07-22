<?php
require 'config.php';

if( isset($_POST["register"]) ) {

	if( registrasi($_POST) > 0 ) {
		echo "<script>
				alert('Data baru berhasil ditambahkan!');
        </script>";
  header ('location:index.php');
   exit;
	} else {
		echo mysqli_error($conn);
	}

}

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
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/kepangkatan.min.css" rel="stylesheet">

</head>


<body class="bg-gradient-primary">

  <div class="container ">
<div class="row col-md- 12 justify-content-center">
     <div class="sidebar-brand-text font-weight-bold text-secondary  align-right bg-light col-lg-12 "  > 
         <img src="img/logo.png" width="50px" height="50px">
         KEJAKSAAN TINGGI SUMATERA SELATAN || BAGIAN PEGAWAIAN
         <marquee>Jl. Gubernur H. A Bastari, Seberang Ulu I, Kota Palembang, Sumatera Selatan 30257, (0711) 310936</marquee></div>
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Buat Akun Baru</h1>
              </div>
              <form class="user" method="post" action="">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="username" class="form-control form-control-user" id="exampleFirstName"
                      placeholder="Username">
                  </div>
                  <div class="col-sm-6">
                    <input type="email" name="email" class="form-control form-control-user" id="exampleLastName"
                      placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="nama" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="Nama Lengkap">
                </div>
                  <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="password" name="password2" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="Ulangi Password">
                </div>
                <input type="submit" class="btn btn-danger btn-user btn-block" name="register" value="Daftar" />
                
                <hr>
               
              </form>
              <hr>
             
              <div class="text-center">
                <a class="small" href="index.php">Sudah Punya Akun ? Silahkan Login !</a>
              </div>
            </div>
          </div>
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

</body>

</html>