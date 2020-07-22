 <?php

 include "koneksi.php";

 $query = mysqli_query($conn, "SELECT * FROM profil WHERE nrp = '234567'");
 $row_query = mysqli_fetch_array($query);

while ($tampil=mysqli_fetch_array($query)){

//untnuk menampilkan untuk yang sudah input
 if(file_exists("./img/foto_$tampil[nrp].png"))
 {
        //jika ada
        $foto="<a href='./img/foto_$tampil[nrp].png' target='blank''>
        <img src='./img/foto_$tampil[nrp].png' 
        class='img-circle' width=80px height=80px>
        </a>
        ";
    }
    else{
        //jika tidak ada
        $foto="";
    }
}

if(isset($_GET['hapus'])){
    $sql=mysqli_query($conn, "DELETE FROM profil WHERE nrp='$_GET[hapus]'" );
        
        if($sql)
        {
            echo"<script>alert('Data Mahasiswa Di Hapus');</script>";
        }
        else
        {
            echo"<script>alert('Gagal');</script>";
        }
 }
 if(isset($_POST['simpan']))
 {
     //echo $_POST['nrp'];
     
     //untuk upload foto

     if(!empty($_FILES['photo']['tmp_name']))
     {
        move_uploaded_file($_FILES['photo']['tmp_name'],
        "./img/foto_$_POST[nrp].png");
     }
     if(isset($_GET['edit']))
    {
            //update
            $sql=mysqli_query($conn, "UPDATE profil SET nama='$_POST[nama]',
            nrp='$_POST[nrp]',pangkat='$_POST[pangkat]' WHERE nrp='$_POST[nrp]'");
    
        if($sql)
        {
            echo"<script>alert('Data Berhasil Di ubah');</script>";
        }
        else
        {
            echo"<script>alert('Gagal');</script>";
        }
    }

    else
    
        // insert
    {
        $sql=mysqli_query($conn, "INSERT INTO profil VALUES('',
        '$_POST[nama]','$_POST[nrp]','$_POST[pangkat]','$_POST[bagian]')");
        
        if($sql)
        {
            echo"<script>alert('Data Berhasil Di Simpan');</script>";
        }
        else
        {
            echo"<script>alert('Gagal');</script>";
        }
    }   
}

?>

<div class="card o-hidden border-0 shadow-lg my-1">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg">
                <div class="p-3">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-1">Profil Data Diri</h1>
                        <hr>
                        <div class="container">
                                <table class="border-4 ">
                                        <tr>
                                            <td rowspan="4"><img src="img/bg.jpg" width="200" height="200" class="img-profile animated--fade-in circle"></td>
                                            <td class="mx-2 text-left text-12 h2">Nama</td>
                                            <td class="mx-2 text-left text-12 h2">:</td>
                                        </tr>
                                         <tr>
                                            
                                            <td class="mx-2 text-left text-12 h2">NRP</td>
                                            <td class="mx-2 text-left text-12 h2">:</td>
                                        </tr>
                                         <tr>
                                            
                                            <td class="mx-2 text-left text-12 h2">Pangkat</td>
                                            <td class="mx-2 text-left text-12 h2">:</td>
                                        </tr>
                                         <tr>
                                            
                                            <td class="mx-2 text-left text-12 h2">Bagian</td>
                                            <td class="mx-2 text-left text-12 h2">:</td>
                                        </tr>
                                
                                
                                
                                </table>
                            
                            </div>
                           
                        </div>
                        
                    </div>
                    <div class="container">
                             <a href="?halaman=editprofil" class=" btn btn-block btn-user btn-primary shadow-sm col-2"></i> Edit Profil</a>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
                        
                    </div>
                </div>
              </div>
              