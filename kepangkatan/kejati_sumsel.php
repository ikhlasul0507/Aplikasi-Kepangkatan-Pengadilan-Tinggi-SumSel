 <?php

include "koneksi.php";

 if(isset($_POST['Simpan']))
   	//insert
      {
        $sql=mysqli_query($conn, "INSERT INTO kejati_sumsel VALUES 
        ('',
        '$_POST[nama]',
        '$_POST[nrp]',
        '$_POST[nip]',
        '$_POST[tempat_lahir]',
        '$_POST[tanggal_lahir]',
        '$_POST[pangkat_golongan]',
        '$_POST[pangkat_tamat]',
        '$_POST[jabatan_nama]',
        '$_POST[jabatan_tamat]',
        '$_POST[catatan]')");
        
        if($sql)
        {
          echo "<script>alert('Data Berhasil Di Simpan');</script>";
        }
        else
        {
          //echo"<script>alert('Gagal');</script>";
          echo mysqli_error($conn);
        }
     }
   
 ?>


<div class="col-lg-12 my-2">
      <div class="card-body p-0 col-lg-12">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-3">
              <div class="text-center">
             
                <h2 class="h5 text-gray-900">DATA URUT KEPANGKATAN (D.U.K.) PEGAWAI NEGERI SIPIL</h2>
                <h2 class="h5 text-gray-900">KEJAKSAAN REPUBLIK INDONESIA WILAYAH SUMATERA SELATAN</h2>
                <h2 class="h5 text-gray-900 mb-2">
                </h2>
              </div><hr>
              <form class="form " method="post" action="">
              
                  <input type="hidden" value="<?php
              if(isset($_GET['edit'])){echo $edit['id_kejati_sumsel'];}
              ?>" name="id_kejati_sumsel">

              <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0"><label>Nama</label>
                  <input type="text" name="nama" class="form-control form-control-user"  id="exampleFirstName"
                       required value="<?php
              if(isset($_GET['edit'])){echo $edit['nama'];}
              ?>">
                  </div>

                  <div class="col-sm-6 mb-3 mb-sm-0"><label>NRP</label>
                      <input type="text" name="nrp" class="form-control form-control-user" id="exampleLastName"
                       required value="<?php
              if(isset($_GET['edit'])){echo $edit['nrp'];}
              ?>">
                  </div>
                 
              </div> 
              <hr>
                 <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0"><label>NIP</label>
                  <input type="text" name="nip" class="form-control form-control-user"  id="exampleFirstName"
                       required value="<?php
              if(isset($_GET['edit'])){echo $edit['nip'];}
              ?>">
                  </div>

                  <div class="col-sm-6 mb-3 mb-sm-0"><label>Tempat Lahir</label>
                      <input type="text" name="tempat_lahir" class="form-control form-control-user" id="exampleLastName"
                       required value="<?php
              if(isset($_GET['edit'])){echo $edit['tempat_lahir'];}
              ?>">
                  </div>
                 
              </div> 
                 <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0"><label>Tanggal Lahir</label>
                  <input type="date" name="tanggal_lahir" class="form-control form-control-user"  id="exampleFirstName"
                       required value="<?php
              if(isset($_GET['edit'])){echo $edit['tanggal_lahir'];}
              ?>">
                  </div>

                  <div class="col-sm-6 mb-3 mb-sm-0"><label>Pangkat</label>
                      <input type="text" name="pangkat_golongan" class="form-control form-control-user" id="exampleLastName"
                       required value="<?php
              if(isset($_GET['edit'])){echo $edit['pangkat_golongan'];}
              ?>">
                  </div>
                 
              </div> 
                 <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0"><label>Pangkat Tamat</label>
                  <input type="text" name="pangkat_tamat" class="form-control form-control-user"  id="exampleFirstName"
                       required value="<?php
              if(isset($_GET['edit'])){echo $edit['pangkat_tamat'];}
              ?>">
                  </div>

                  <div class="col-sm-6 mb-3 mb-sm-0"><label>Jabatan</label>
                      <input type="text" name="jabatan_nama" class="form-control form-control-user" id="exampleLastName"
                       required value="<?php
              if(isset($_GET['edit'])){echo $edit['jabatan_nama'];}
              ?>">
                  </div>
                 
              </div> 
                 <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0"><label>Jabatan Tamat</label>
                  <input type="text" name="jabatan_tamat" class="form-control form-control-user"  id="exampleFirstName"
                       required value="<?php
              if(isset($_GET['edit'])){echo $edit['jabatan_tamat'];}
              ?>">
                  </div>

                  <div class="col-sm-6 mb-3 mb-sm-0"><label>Keterangan</label>
                      <input type="text" name="catatan" class="form-control form-control-user" id="exampleLastName"
                      required value="<?php
              if(isset($_GET['edit'])){echo $edit['catatan'];}
              ?>">
                  </div>
                 
              </div> 
              <hr>
                
               
                </div>
                <div class="row">
                  <div class="col-sm-6">
                  <input type="submit" class="btn btn-user btn-primary ml-3" name="Simpan" value="Simpan">
                  </div>
                 
                  <div class="col-sm-2">
                  <a href="?halaman=laporan_kejati_sumsel" class="d-none d-sm-inline-block btn btn-block btn-user btn-success m"><i class="fas fa-book fa-sm text-white-50"></i> Report</a>
                  </div>
                </div>
                <hr>
               
              </form>
              
             
            </div>
          </div>
        </div>
      </div>
    </div>