<!DOCTYPE html>
<html>
<head>
	<title>SISFOTA</title>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />  
  <link href="<?=base_url('assets/fa/css/all.css')?>" rel="stylesheet">
  <!-- CSS Files -->
  <link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" />
  <link href="<?=base_url('assets/css/paper-dashboard.css?v=2.0.1')?>" rel="stylesheet"/>
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet"/>
  
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/datatables.min.css')?>">
 <script src="<?=base_url('assets/js/datatables.min.js')?>"></script>
</head>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <!-- <div class="logo-image-small">
            <img src="./assets/img/logo-small.png">
          </div> -->
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          SISFOTA
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="<?=base_url('mahasiswa/judul')?>">
              <i class="fa fa-paper-plane"></i>
              <p>Judul Tugas Akhir</p>
            </a>
          </li>
           <li class="active ">
            <a href="<?=base_url('mahasiswa/bimbingan')?>">
              <i class="fa fa-user-graduate"></i>
              <p>Bimbingan</p>
            </a>
          </li>
           <li class="active ">
            <a href="<?=base_url('mahasiswa/komentar')?>">
              <i class="fa fa-comment"></i>
              <p>Komentar</p>
            </a>
          </li>
           <li class="active ">
            <a href="<?=base_url('mahasiswa/dosen')?>">
              <i class="fa fa-chalkboard-teacher"></i>
              <p>Dosen</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Sistem Informasi Bimbingan Online</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url('assets/img/') . $user['foto']?>" class="profile_img" style="width: 30px; height: 30px; border-radius: 50px"> <?=$user['nm_mhs']?>
                  
                  <p>
                    <span class="d-lg-none d-md-block"><?=$user['nm_mhs']?></span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?=base_url('mahasiswa/profil')?>">Profil</a>
                  <a class="dropdown-item" href="<?=base_url('mahasiswa/logout')?>">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->