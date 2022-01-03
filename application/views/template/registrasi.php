<!DOCTYPE html>
<html>
<head>
  <title><?=$title?></title>
  
 <link href="<?= base_url('assets/')?>css/sb-admin-2.min.css" rel="stylesheet">
 </head>

<body class="bg-gradient-success">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
         <!--  <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Registrasi</h1>
              </div>
                 <div class="alert alert-success">  
              <small><?=$this->session->flashdata('message')?></small>
            </div>
              <form action="<?= base_url('pages/registrasi');?>" method="POST">
               <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nim" placeholder="NIM" name="nim" value="<?=set_value('nim')?>">
                  <small class="text-danger"><?=form_error('nim');?></small>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nm_mhs" name="nm_mhs" placeholder="Nama Mahasiswa" value="<?=set_value('nm_mhs')?>">
                  <small class="text-danger"><?=form_error('nm_mhs');?></small>
                </div>
               <div class="form-group">
                 <select name="j_kelamin" id="j_kelamin" class="form-control">
                   <option value="Laki-Laki">Laki-Laki</option>
                   <option value="Perempuan">Perempuan</option>
                 </select>           
               </div>
               <div class="form-group">
               <input type="text" class="form-control" name="prodi" id="prodi" placeholder="Prodi" value="<?=set_value('prodi')?>">
               <small class="text-danger"><?=form_error('prodi');?></small>
             </div>
             <div class="form-group">
               <input type="text" class="form-control" name="thn_angk" id="thn_angk" placeholder="Tahun Angkatan" value="<?=set_value('thn_angk')?>">
               <small class="text-danger"><?=form_error('thn_angk');?></small>
             </div>
             <div class="form-group">
               <input type="text" class="form-control" name="outline" id="outline" placeholder="Outline" value="<?=set_value('outline')?>">
               <small class="text-danger"><?=form_error('outline');?></small>
             </div>
             
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                    <small class="text-danger"><?=form_error('password1');?></small>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                  </div>
                  
                </div>
                <button type="submit" class="btn btn-success btn-user btn-block"> Daftar</button>
              
              </form>
              <hr>
              <div class="row">
                <div class="col-sm" align="center">
                  
                  <small><a href="<?=base_url('pages/registrasiDosen')?>">Registrasi Akun Dosen?</a></small><br>
                  <small><a href="<?=base_url('pages/index')?>">Masuk?</a></small>

                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  
</body>
</html>