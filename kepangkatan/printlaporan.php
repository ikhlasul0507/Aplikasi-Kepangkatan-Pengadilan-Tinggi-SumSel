<?php 

include "koneksi.php";

 ?>
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
              
            <div style="padding: 0 10px;">
      <div id="container">
      <table class="table table-striped table-hover table-bordered" border="1px" cellpadding="" cellspacing="0">
 <!--baris header-->
    <tr>
    <td rowspan="2" class="align-middle text-center table-danger">NO</td>
    <td rowspan="2" class="align-middle text-center table-danger">OPTIONS</td>
        <td rowspan="2" class="align-middle text-center table-danger">TAHUN</td>
    <td rowspan="2" class="align-middle text-center table-danger">NAMA</td>
    <td rowspan="2" class="align-middle text-center table-danger">NRP/NIP</td>
    <td colspan="2" class="align-middle text-center table-danger">PANGKAT</td>
      <td colspan="2" class="align-middle text-center table-danger">JABATAN</td>
    <td colspan="2" class="align-middle text-center table-danger">MASA KERJA</td>
    <td colspan="3" class="align-middle text-center table-danger">LATIHAN JABATAN</td>
    <td colspan="3" class="align-middle text-center table-danger">PENDIDIKAN</td>
    <td rowspan="2" class="align-middle text-center table-danger">USIA</td>
    <td rowspan="2" class="align-middle text-center table-danger">CATATAN MUTASI JABATAN DAN KETERANGAN</td>
    
    
    
    
    </tr>
    <tr>
    
    
    <td class="align-middle text-center table-danger">GOL</td>
      <td class="align-middle text-center table-danger">TMT</td>
    <td class="align-middle text-center table-danger">NAMA</td>
    <td class="align-middle text-center table-danger">TMT</td>
    <td class="align-middle text-center table-danger">TH.</td>
    <td class="align-middle text-center table-danger">BL.</td>
    <td class="align-middle text-center table-danger">NAMA</td>
    <td class="align-middle text-center table-danger">BLN & THN</td>
    <td class="align-middle text-center table-danger">JUMLAH JAM</td>
    <td class="align-middle text-center table-danger">NAMA</td>
    <td class="align-middle text-center table-danger">LULUS TAHUN</td>
    <td class="align-middle text-center table-danger">TK.IJAZAH</td>
    
    
    </tr>
  <tr>
    <td class="align-middle text-center table-info">1</td>
   
    <td class="align-middle text-center table-info">3</td>
    <td class="align-middle text-center table-info">4</td>
     <td class="align-middle text-center table-info">5</td>
    <td class="align-middle text-center table-info">6</td>
    <td class="align-middle text-center table-info">7</td>
    <td class="align-middle text-center table-info">8</td>
    <td class="align-middle text-center table-info">9</td>
    <td class="align-middle text-center table-info">10</td>
    <td class="align-middle text-center table-info">11</td>
    <td class="align-middle text-center table-info">12</td>
    <td class="align-middle text-center table-info">13</td>
    <td class="align-middle text-center table-info">14</td>
    <td class="align-middle text-center table-info">15</td>
    <td class="align-middle text-center table-info">16</td>
    <td class="align-middle text-center table-info">17</td>
    <td class="align-middle text-center table-info">18</td>
    <td class="align-middle text-center table-info">19</td>
    
    </tr>
  <!--baris isi-->

<?php

$no=1;
$data=mysqli_query($conn,"SELECT * FROM kejati_sumsel order by nama");
while ($tampil=mysqli_fetch_array($data)){

  echo "
  <tr>
    <td style='vertical-align:middle'>$no</td>
    <td style='vertical-align:middle'>$tampil[tahun_ke]</td>
        <td style='vertical-align:middle'>$tampil[nama]<br>$tampil[nrp]</td>
        <td style='vertical-align:middle'>$tampil[nrp]</td>
        <td style='vertical-align:middle'>$tampil[pangkat_golongan]</td>
        <td style='vertical-align:middle'>$tampil[pangkat_tamat]</td>
        <td style='vertical-align:middle'>$tampil[jabatan_nama]</td>
        <td style='vertical-align:middle'>$tampil[jabatan_tamat]</td>
        <td style='vertical-align:middle'>$tampil[masa_tahun]</td>
        <td style='vertical-align:middle'>$tampil[masa_bulan]</td>
        <td style='vertical-align:middle'>$tampil[latihan_nama]</td>
        <td style='vertical-align:middle'>$tampil[latihan_bulan]</td>
        <td style='vertical-align:middle'>$tampil[latihan_jam]</td>
        <td style='vertical-align:middle'>$tampil[pendidikan_nama]</td>
        <td style='vertical-align:middle'>$tampil[pendidikan_tahun]</td>
        <td style='vertical-align:middle'>$tampil[pendidikan_tk]</td>
        <td style='vertical-align:middle'>$tampil[usia]</td>
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
    </div>

    <script src="js/script.js">
    </script>
    <script type="text/javascript">
    setTimeout("window.print();",0);//milisecond
    </script>

    </body>
 </html>