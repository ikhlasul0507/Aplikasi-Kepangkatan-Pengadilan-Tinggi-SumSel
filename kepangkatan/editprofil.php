
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
                            <div class="row ">
                                <div class="col-sm-4">
                                    <form class="form" action="" method="post" enctype="multipart/form-data">
                                    <div class="form ">
                                        <div class="form-group">
                                        <input type="text" name="nama" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Nama Lengkap" required value="<?php
                            if(isset($_GET['edit'])){echo $edit['nama'];}
                            ?>">
                                        </div>
                                        <div class="form-group">
                                        <input type="text" name="nrp" class="form-control form-control-user" id="exampleInputEmail"
                                            placeholder="NRP/NIP" required value="<?php
                            if(isset($_GET['edit'])){echo $edit['nrp'];}
                            ?>">
                                        </div>
                                        <div class="form-group">
                                        <input type="text" name="pangkat" class="form-control form-control-user" id="exampleInputEmail"
                                            placeholder="Pangkat"  required value="<?php
                            if(isset($_GET['edit'])){echo $edit['pangkat'];}
                            ?>">
                                        </div>
                                        <div class="form-group">
                                        <input type="text" name="bagian" class="form-control form-control-user" id="exampleInputEmail"
                                            placeholder="Bagian" required value="<?php
                            if(isset($_GET['edit'])){echo $edit['bagian'];}
                            ?>">
                                        </div>
                                        <div class="form-group">
                                        <input type="file" name="photo" class="form-control " id="exampleInputEmail"
                                            placeholder="Pas Photo">
                                        </div>
                                        
                                   
                                        
                                    </div>
                                   
                                  
                                        
                            </div>
                             
                        </div>
                       
                    </div>
                </div>
                <div class="container">                    
                <input type="submit" class="btn btn-success  col-md-auto mx-2 align-left" name="simpan" value="Simpan" >  
                 </div>

            </div>
        </div>
    </div>
</div>
                        
                    </div>
                </div>
              </div>

                </form>
                                        