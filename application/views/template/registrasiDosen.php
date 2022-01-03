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
                <h1 class="h4 text-gray-900 mb-4">Registrasi Dosen</h1>
              </div>
              <small><?=$this->session->flashdata('message')?></small>
              <form action="<?= base_url('pages/registrasiDosen');?>" method="POST">
               <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nip" placeholder="NIP" name="nip" value="<?=set_value('nip')?>">
                  <small class="text-danger"><?=form_error('nip');?></small>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama" value="<?=set_value('nama')?>">
                  <small class="text-danger"><?=form_error('nama');?></small>
                </div>
               <div class="form-group">
               <textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat"  value="<?=set_value('alamat')?>"></textarea>
               <small class="text-danger"><?=form_error('alamat');?></small>
             </div>
             <div class="form-group">
               <input type="text" class="form-control" name="nmr_tlp" id="nmr_tlp" placeholder="Nomor Telepon" value="+62">
               <small class="text-danger"><?=form_error('nmr_tlp');?></small>
             </div>
             <div class="form-group">
               <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?=set_value('email')?>">
               <small class="text-danger"><?=form_error('email');?></small>
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
                  
                  <small><a href="<?=base_url('pages/registrasi')?>">Registrasi Akun Mahasiswa?</a></small><br>
                  <small><a href="<?=base_url('pages/logDosen')?>">Masuk?</a></small>

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