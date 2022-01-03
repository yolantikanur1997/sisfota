<!DOCTYPE html>
<html>
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url(<?php echo base_url('assets/img/komputer.jpg')?>);
  min-height: 75%;
}

.menu {
  display: none;
}
</style>
<body>
    
     <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-animate-right w3-card-4" style="width: 550px">
      <header class="w3-container w3-center w3-blue-gray" style="height: 100px"> 
        <span  onclick="document.getElementById('id02').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2 style="padding-top: 25px">Masuk</h2>
      </header>
      <div class="w3-container">      
         <small><?=$this->session->flashdata('message')?></small>
         <form action="<?= base_url('pages/login')?>" method="POST">
       <div class="form-group mt-5">
        <input type="text" name="nim" id="nim" class="form-control" placeholder="NIM"  autocomplete="off" autofocus>
       </div>
       <div class="form-group mb-5">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password"><br>
        <input type="checkbox" onclick="myFunction()"> Lihat Password
       </div>
       <div class="form-group mt-3">
       <button type="submit" class="btn btn-primary">Masuk</button>
       <button type="reset" class="btn btn-danger">Batal</button>
       </div>
    </form>
    <a href="<?=base_url('pages/logDosen')?>" style="text-decoration: none"><p style="text-align: center;">Masuk Sebagai Pembimbing?</p></a>
      </div>
      <footer class="w3-container w3-center w3-blue-gray">
         <p>&copy 2020 &reg All Right Reserved <b>SISFOTA</b></p>
      </footer>
    </div>
  </div>
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">Sistem Informasi Tugas Akhir Online</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-red" style="font-size:90px; font-family: monospace;">SISFOTA</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">Sistem Informasi Tugas Akhir Online</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">TENTANG SISFOTA</span></h5>
    <p style="text-align: justify;">SISFOTA adalah Sistem Informasi Bimbingan Tugas Akhir yang dapat diakses secara <i>Online</i>. SIFOTA tercipta dikarenakan banyak sekali kampus yang melakukan konsultasi bimbingan menggunakan Email ataupun via Whatsapp yang  dirasa masih belum efektif. Maka dari itu, hadirnya SISFOTA diharapkan dapat mengurangi keterlambatan dan tidak efisiensi dalam melakukan bimbingan Tugas Akhir secara <i>Online</i></p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p style="text-align: justify;"><i>"SISFOTA Dapat Membantu Mahasiswa Tingkat Akhir Untuk Melakukan Konsultasi Bersama Dosen Bimbingan Tanpa Harus Tatap Muka"</i></p>
      <p>SISFOTA Owner: Tuti Hardianti Pratiwi</p>
    </div>
    <!--<img src="/w3images/coffeeshop.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
    <p><strong>Opening hours:</strong> everyday from 6am to 5pm.</p>
    <p><strong>Address:</strong> 15 Adr street, 5015, NY</p>
  </div>-->
</div>


<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>

<!--password-->

<script type="text/javascript">
  function myFunction() {
  var pas = document.getElementById("password");
  if (pas.type === "password") {
    pas.type = "text";
  } else {
    pas.type = "password";
  }
}
</script>
</body>
</html>
