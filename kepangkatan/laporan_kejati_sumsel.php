<?php

//require 'config.php';
include 'koneksi.php';

if(isset($_GET['delete'])){
	$sql=mysqli_query($conn, "DELETE FROM kejati_sumsel WHERE id_kejati_sumsel='$_GET[delete]'" );
		
		if($sql)
		{
			echo"<script>alert('Data Berhasil Di Hapus');</script>";
		}
		else
		{
			echo"<script>alert('Gagal');</script>";
		}
 }

 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
 </head>
 <body>
 
 
<div class="card o-hidden border-0 shadow-lg my-2">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-3">
              <div class="text-center">
             
                <h2 class="h5 text-gray-900">DAFTAR URUT KEPANGKATAN (D.U.K.) PEGAWAI NEGERI SIPIL</h2>
                <h2 class="h5 text-gray-900">KEJAKSAAN REPUBLIK INDONESIA WILAYAH SUMATERA SELATAN</h2>
                <h2 class="h5 text-gray-900 mb-2">
                </h2>
              </div>
              <hr>
              <form class="form " method="get" action="">
              <div class="form-group row">
                     <div class="col-sm-3">
                    <input type="text" name="cari" class="form-control form-control-user form-xs" name="keyword"
                      placeholder="Pencarian..."  autofocus id="katakunci" tabindex="1">
                    </div>
                    <div class="col-sm-auto">

                    <a onclick="cari()" class="btn btn-warning form-control" tabindex="2">Cari</a>
                          
			               </button>
                    </div>
              </form>

                    
                    <div class="col-sm-auto mb-3 mb-sm-0">
                    <form method="post" action='' target='_blank' enctype="multipart/form-data">
                     <a href="printlaporan.php" class="btn btn-danger form-control" target="blank">Print</a>
			        </button>
                  </div>
                  
                 
                  </form>
                 
                   <div class="col-sm-5">
                    
                  </div>
                  <div class="col-sm-auto flex-right">
                    <a href="?halaman=kejati_sumsel" class="d-none d-sm-inline-block btn btn-block btn-user btn-primary shadow-sm md-5"><i class="fas fa-upload fa-sm text-white-50"></i>Tambah</a>
			        </button>
                  </div>
                 
              </div> 
             
                <hr>
            
      <div id="container">
      <table class="table table-striped table-hover table-bordered table-responsive" border="5">
 <!--baris header-->
    <tr>
    <td class="align-middle text-center table-info">NO</td>
     <td class="align-middle text-center table-info">Action</td>
    <td class="align-middle text-center table-info">NAMA,NRP,NIP</td>
    <td class="align-middle text-center table-info">PANGKAT</td>
    <td class="align-middle text-center table-info">TAMAT</td>
     <td class="align-middle text-center table-info">KETERANGAN</td>
    </tr>

	  <tr>
		<td class="align-middle text-center table-warning">1</td>
		<td class="align-middle text-center table-warning">2</td>
		<td class="align-middle text-center table-warning">3</td>
		<td class="align-middle text-center table-warning">4</td>
	   <td class="align-middle text-center table-warning">5</td>
      <td class="align-middle text-center table-warning">6</td>
    </tr>
  <!--baris isi-->
<script>
function cari(){
  document.location='?halaman=laporan_kejati_sumsel&cari=' + document.getElementById("katakunci").value;
}
</script>

<?php

if(isset($_GET['cari'])){

	$katakunci =" where 
  nama like '%$_GET[cari]%' OR 
  nrp like '%$_GET[cari]%' OR
  tahun_ke like '%$_GET[cari]%' OR
  jabatan_nama like '%$_GET[cari]%' ";
}
else{
	$katakunci="";
}

$no=1;
$data=mysqli_query($conn,"SELECT * FROM kejati_sumsel $katakunci order by id desc");
while ($tampil=mysqli_fetch_array($data))
{
	echo "
	<tr>
		<td style='vertical-align:middle'>$no</td>
    <td style='vertical-align:middle' align=center>
             <a href='?halaman=ubahdata&edit=$tampil[id_kejati_sumsel]' class='badge badge-success ' onclick='return confirm(".'"Apakah anda akan Mengubah data ?"'.")'>Edit</a>
             <br><br>
             <a href='?halaman=laporan_kejati_sumsel&delete=$tampil[id_kejati_sumsel]' class='badge badge-danger' onclick='return confirm(".'"Apakah anda Yakin ?"'.")'>Delete</a>
        </td>
		    <td style='vertical-align:middle'><b>$tampil[nama]</b><br>$tampil[nrp]<br>$tampil[nip]<br>$tampil[tempat_lahir]<br>$tampil[tanggal_lahir]</td>
        <td style='vertical-align:middle'>$tampil[pangkat_golongan]<br>$tampil[pangkat_tamat]</td>
        <td style='vertical-align:middle'>$tampil[jabatan_nama]<br>$tampil[jabatan_tamat]</td>
        <td style='vertical-align:middle'>$tampil[catatan]</td>
		    
	</tr>
	";
	$no=$no+1;
}
?>
</table>
    </div>
              
            </div>
          </div>
        </div>
      </div>
   

    <script src="js/script.js"></script>

    </body>
 </html>