<div class="content">
        <div class="card" style="width:100%;">
  <div class="card-header">
    <?=$judul?>
  </div>
  <?php foreach ($gabung as $gabung) : ?>
    <div class="row">
      <div class="col-sm-6 mt-5">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">NIM Mahasiswa: <?=$gabung['nim']?></li>
    <li class="list-group-item">Nama Mahasiswa: <?=$gabung['nm_mhs']?></li>
    <li class="list-group-item">Judul: <?=$gabung['p_judul']?></li>   
      <li class="list-group-item">Nama File : <?=$gabung['up_file']?></li>
  </ul>
  </div>
  <div class="col-sm-6 mt-5">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Tanggal Ajuan: <?=$gabung['tanggal']?></li>
    <li class="list-group-item">Deskripsi : <?=$gabung['deskripsi']?></li>
      <li class="list-group-item">Keterangan : <?=$gabung['ket']?></li>
  </ul>
  </div>
 
</div>
<?php endforeach?>
</div>
      </div>

