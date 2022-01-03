<!DOCTYPE html>
<html>
<head>
  <title><?=$judul?></title>
   <link href="<?= base_url('assets/')?>css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>


<body class="bg-gradient-success">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login Pembimbing</h1>
                  </div>
                  <small><?=$this->session->flashdata('message')?></small>
                  <form class="user" method="POST" action="<?=base_url('pages/loginDosen')?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="nip" placeholder="NIP" name="nip" value="<?= set_value('nip')?>">
                      <small class="text-danger"><?=form_error('nip');?></small>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                      <small class="text-danger"><?=form_error('password');?></small>
                    </div>
                    <button class="btn btn-success btn-user btn-block" type="submit">Login</button>
                  </form>
                  <hr>
                 
                  <div class="text-center">
                    <a class="small" href="<?= base_url('pages/registrasiDosen');?>">Buat Akun?</a>
                  </div>
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