 <?php

include "koneksi.php";



if(isset($_POST['submit']))
	{

        
			//update
			$sql=mysqli_query($conn, "UPDATE kejati_sumsel SET 
               tahun_ke= '$_POST[tahun_ke]',
               nrp='$_POST[nrp]',
               nama='$_POST[nama]',
               pangkat_golongan='$_POST[pangkat_golongan]',
               pangkat_tamat='$_POST[pangkat_tamat]',
               jabatan_nama='$_POST[jabatan_nama]',
               jabatan_tamat='$_POST[jabatan_tamat]',
               masa_tahun='$_POST[masa_tahun]',
               masa_bulan='$_POST[masa_bulan]',
               latihan_nama='$_POST[latihan_nama]',
               latihan_bulan='$_POST[latihan_bulan]',
               latihan_jam='$_POST[latihan_jam]',
               pendidikan_nama='$_POST[pendidikan_nama]',
               pendidikan_tahun='$_POST[pendidikan_tahun]',
               pendidikan_tk='$_POST[pendidikan_tk]',
               usia='$_POST[usia]',
               catatan='$_POST[catatan]' 
           WHERE id_kejati_sumsel='$_POST[id_kejati_sumsel]'");
	
		if($sql)
		{
			echo"<script>alert('Data Mahasiswa Di ubah');</script>";
      
		}
		else
		{
			//echo"<script>alert('Gagal');</script>";
      mysql_error();
		}
  }
	
 //benar
 if(isset($_GET['edit'])){
	 $edit=mysqli_fetch_array(mysqli_query($conn,"SELECT *FROM kejati_sumsel where id_kejati_sumsel='$_GET[edit]'"));
 }
 ?>


<div class="card o-hidden border-0 shadow-lg my-2">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-3">
              <div class="text-center">
             
                <h2 class="h5 text-gray-900">DATA URUT KEPANGKATAN (D.U.K.) PEGAWAI NEGERI SIPIL</h2>
                <h2 class="h5 text-gray-900">KEJAKSAAN REPUBLIK INDONESIA WILAYAH SUMATERA SELATAN</h2>
                <h2 class="h5 text-gray-900 mb-2">
                </h2>
              </div><hr>
              <form class="form " method="post" action="">
             
              <div class="form-group row">

                  <div class="col-sm-4 mb-3 mb-sm-0">
                      <select class="form-control" autofocus name="tahun_ke" required>
                      <option <?php
              if(isset($_GET['edit'])){
                if($edit['tahun_ke']=="2010")
                {
                echo 'selected';
                }
              }
              ?>
              >2010</option>
                      <option <?php
              if(isset($_GET['edit'])){
                if($edit['tahun_ke']=="2011")
                {
                echo 'selected';
                }
              }
              ?>>2011</option>
                      <option <?php
              if(isset($_GET['edit'])){
                if($edit['tahun_ke']=="2012")
                {
                echo 'selected';
                }
              }
              ?>>2012</option>
                      <option <?php
              if(isset($_GET['edit'])){
                if($edit['tahun_ke']=="2013")
                {
                echo 'selected';
                }
              }
              ?>>2013</option>
                      <option <?php
              if(isset($_GET['edit'])){
                if($edit['tahun_ke']=="2014")
                {
                echo 'selected';
                }
              }
              ?>>2014</option>
                      <option <?php
              if(isset($_GET['edit'])){
                if($edit['tahun_ke']=="2015")
                {
                echo 'selected';
                }
              }
              ?>>2015</option>
                      <option <?php
              if(isset($_GET['edit'])){
                if($edit['tahun_ke']=="2016")
                {
                echo 'selected';
                }
              }
              ?>>2016</option>
                      <option <?php
              if(isset($_GET['edit'])){
                if($edit['tahun_ke']=="2017")
                {
                echo 'selected';
                }
              }
              ?>>2017</option>
                      <option <?php
              if(isset($_GET['edit'])){
                if($edit['tahun_ke']=="2018")
                {
                echo 'selected';
                }
              }
              ?>>2018</option>
                      <option <?php
              if(isset($_GET['edit'])){
                if($edit['tahun_ke']=="2019")
                {
                echo 'selected';
                }
              }
              ?>>2019</option>
                      <option <?php
              if(isset($_GET['edit'])){
                if($edit['tahun_ke']=="2020")
                {
                echo 'selected';
                }
              }
              ?>>2020</option>
                      <option <?php
              if(isset($_GET['edit'])){
                if($edit['tahun_ke']=="2021")
                {
                echo 'selected';
                }
              }
              ?>>2021</option>
                      <option <?php
              if(isset($_GET['edit'])){
                if($edit['tahun_ke']=="2022")
                {
                echo 'selected';
                }
              }
              ?>>2022</option>
                      <option <?php
              if(isset($_GET['edit'])){
                if($edit['tahun_ke']=="2023")
                {
                echo 'selected';
                }
              }
              ?>>2023</option>
                      <option <?php
              if(isset($_GET['edit'])){
                if($edit['tahun_ke']=="2024")
                {
                echo 'selected';
                }
              }
              ?>>2024</option>
                      <option <?php
              if(isset($_GET['edit'])){
                if($edit['tahun_ke']=="2025")
                {
                echo 'selected';
                }
              }
              ?>>2025</option>
                      <option <?php
              if(isset($_GET['edit'])){
                if($edit['tahun_ke']=="2026")
                {
                echo 'selected';
                }
              }
              ?>>2026</option>
                      <option <?php
              if(isset($_GET['edit'])){
                if($edit['tahun_ke']=="2027")
                {
                echo 'selected';
                }
              }
              ?>>2027</option>
                      <option <?php
              if(isset($_GET['edit'])){
                if($edit['tahun_ke']=="2028")
                {
                echo 'selected';
                }
              }
              ?>>2028</option>
                      <option <?php
              if(isset($_GET['edit'])){
                if($edit['tahun_ke']=="2029")
                {
                echo 'selected';
                }
              }
              ?>>2029</option>
                      
                    </select>
                  </div>
                  <input type="hidden" value="<?php
							if(isset($_GET['edit'])){echo $edit['id_kejati_sumsel'];}
							?>" name="id_kejati_sumsel">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                      <input type="text" name="nama" class="form-control form-control-user"  id="exampleFirstName"
                      placeholder="Nama" required value="<?php
							if(isset($_GET['edit'])){echo $edit['nama'];}
							?>">
                  </div>
                 
                  <div class="col-sm-4">
                    <input type="text" name="nrp" class="form-control form-control-user" id="exampleLastName"
                      placeholder="NRP/NIP" required value="<?php
							if(isset($_GET['edit'])){echo $edit['nrp'];}
							?>">
                  </div>
                 
              </div> <hr>
                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label>Pangkat*</label>
                  </div>
                  <div class="col-sm-4">
                    <label>Jabatan*</label>
                  </div>
                  <div class="col-sm-4 ">
                    <label>Masa Kerja</label>
                  </div>
                </div>
                
                <div class="form-group row ">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <!-- <input type="text" name="username" class="form-control form-control-user" id="exampleFirstName"
                      placeholder="Golongan"> -->
                      
                    <select class="form-control" name="pangkat_golongan" required>
                      <option <?php
              if(isset($_GET['edit'])){
                if($edit['pangkat_golongan']=="YUANA DARMA T.U. (II/a)")
                {
                echo 'selected';
                }
              }
              ?>
              >YUANA DARMA T.U. (II/a)</option>
                      <option <?php
              if(isset($_GET['edit'])){
                if($edit['pangkat_golongan']=="MUDA DARMA T.U. (II/b)")
                {
                echo 'selected';
                }
              }
              ?>
              >MUDA DARMA T.U. (II/b)</option>
                      <option  <?php
              if(isset($_GET['edit'])){
                if($edit['pangkat_golongan']=="MUDA DARMA T.U. (II/c)")
                {
                echo 'selected';
                }
              }
              ?>
              >MADYA DARMA T.U. (II/c)</option>
                      <option  <?php
              if(isset($_GET['edit'])){
                if($edit['pangkat_golongan']=="SENA DARMA T.U. (II/d)")
                {
                echo 'selected';
                }
              }
              ?>
              >SENA DARMA T.U. (II/d)</option>
                      <option  <?php
              if(isset($_GET['edit'])){
                if($edit['pangkat_golongan']=="YUANA WIRA T.U. (III/a)")
                {
                echo 'selected';
                }
              }
              ?>>YUANA WIRA T.U. (III/a)</option>
                      <option  <?php
              if(isset($_GET['edit'])){
                if($edit['pangkat_golongan']=="AJUN JAKSA (III/b)")
                {
                echo 'selected';
                }
              }
              ?>>AJUN JAKSA (III/b)</option>
                      <option  <?php
              if(isset($_GET['edit'])){
                if($edit['pangkat_golongan']=="JAKSA PRATAMA (III/c)")
                {
                echo 'selected';
                }
              }
              ?>>JAKSA PRATAMA (III/c)</option>
                      <option  <?php
              if(isset($_GET['edit'])){
                if($edit['pangkat_golongan']=="JAKSA MUDA / SENA DARMA T.U. (III/d)")
                {
                echo 'selected';
                }
              }
              ?>>JAKSA MUDA / SENA DARMA T.U. (III/d)</option>
                      <option  <?php
              if(isset($_GET['edit'])){
                if($edit['pangkat_golongan']=="JAKSA MADYA (IV/a)")
                {
                echo 'selected';
                }
              }
              ?>>JAKSA MADYA (IV/a)</option>
                      <option  <?php
              if(isset($_GET['edit'])){
                if($edit['pangkat_golongan']=="JAKSA UTAMA   PRATAMA (IV/b)")
                {
                echo 'selected';
                }
              }
              ?>>JAKSA UTAMA   PRATAMA (IV/b) </option>
                      <option  <?php
              if(isset($_GET['edit'])){
                if($edit['pangkat_golongan']=="JAKSA UTAMA MUDA (IV/c)")
                {
                echo 'selected';
                }
              }
              ?>>JAKSA UTAMA MUDA (IV/c) </option>
                      <option  <?php
              if(isset($_GET['edit'])){
                if($edit['pangkat_golongan']=="JAKSA UTAMA MADYA (IV/d)")
                {
                echo 'selected';
                }
              }
              ?>>JAKSA UTAMA MADYA (IV/d) </option>
                      
                    </select>
                  </div>
                  <div class="col-sm-4">
                    <input type="text" name="jabatan_nama" class="form-control form-control-user" id="exampleLastName"
                      placeholder="Nama" required value="<?php
							if(isset($_GET['edit'])){echo $edit['jabatan_nama'];}
							?>">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" name="masa_tahun" class="form-control form-control-user" id="exampleLastName"
                      placeholder="Tahun" required value="<?php
							if(isset($_GET['edit'])){echo $edit['masa_tahun'];}
							?>">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name="pangkat_tamat" class="form-control form-control-user" id="exampleFirstName"
                      placeholder="Tamat" required value="<?php
							if(isset($_GET['edit'])){echo $edit['pangkat_tamat'];}
							?>">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" name="jabatan_tamat" class="form-control form-control-user" id="exampleLastName"
                      placeholder="Tamat" required value="<?php
							if(isset($_GET['edit'])){echo $edit['jabatan_tamat'];}
							?>">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" name="masa_bulan" class="form-control form-control-user" id="exampleLastName"
                      placeholder="Bulan" required value="<?php
							if(isset($_GET['edit'])){echo $edit['masa_bulan'];}
							?>">
                  </div>
                </div>
                <hr>
                 <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <label>Latihan Jabatan*</label>
                  </div>
                  <div class="col-sm-4">
                    <label>Pendidikan*</label>
                  </div>
                  <div class="col-sm-4">
                    <label>Usia*</label>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name="latihan_nama" class="form-control form-control-user" id="exampleFirstName"
                      placeholder="Nama" required value="<?php
							if(isset($_GET['edit'])){echo $edit['latihan_nama'];}
							?>">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" name="pendidikan_nama" class="form-control form-control-user" id="exampleLastName"
                      placeholder="Nama" required value="<?php
							if(isset($_GET['edit'])){echo $edit['pendidikan_nama'];}
							?>">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" name="usia" class="form-control form-control-user" id="exampleLastName"
                      placeholder="Usia" required value="<?php
							if(isset($_GET['edit'])){echo $edit['usia'];}
							?>">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name="latihan_bulan" class="form-control form-control-user" id="exampleFirstName"
                      placeholder="Bulan Dan Tahun" required value="<?php
							if(isset($_GET['edit'])){echo $edit['latihan_bulan'];}
							?>">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" name="pendidikan_tahun" class="form-control form-control-user" id="exampleLastName"
                      placeholder="Tahun Lulus" required value="<?php
							if(isset($_GET['edit'])){echo $edit['pendidikan_tahun'];}
							?>">
                  </div>
                  <div class="col-sm-4">
                    <label>Catatan Mutasi Jabatan & Keterangan*</label>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name="latihan_jam" class="form-control form-control-user" id="exampleFirstName"
                      placeholder="Jumlah Jam" required value="<?php
							if(isset($_GET['edit'])){echo $edit['latihan_jam'];}
							?>">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" name="pendidikan_tk" class="form-control form-control-user" id="exampleLastName"
                      placeholder="Tk.Ijazah" required value="<?php
							if(isset($_GET['edit'])){echo $edit['pendidikan_tk'];}
							?>">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" name="catatan" class="form-control form-control-user" id="exampleLastName"
                      placeholder="Catatan*" required value="<?php
							if(isset($_GET['edit'])){echo $edit['catatan'];}
							?>">
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-2">
                  
                  <button type="submit" class="btn btn-danger btn-user btn-block text-center" name="submit">Ubah Data </button>
                  </div>
                  <div class="col-sm-2">
                  <a href="?halaman=laporan_kejati_sumsel" class="d-none d-sm-inline-block btn btn-block btn-user btn-primary shadow-sm"><i class="fas fa-book fa-sm text-white-50"></i> Report</a>
                  </div>
                </div>
                <hr>
               
              </form>
              
             
            </div>
          </div>
        </div>
      </div>
    </div>