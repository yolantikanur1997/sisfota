<div class="content">
        <div class="card" style="width:100%;">
  <div class="card-header">
    <?=$judul?>
  </div>
  <?php foreach ($gabung as $gabung) : ?>
    <div class="row">
      <div class="col-sm-12 mt-5">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">NIM: <?=$gabung['nim']?></li>
    <li class="list-group-item">Nama : <?=$gabung['nm_mhs']?></li>
    <li class="list-group-item">Jenis Kelamin : <?=$gabung['j_kelamin']?></li>
      <li class="list-group-item">Program Studi : <?=$gabung['prodi']?></li>
       <li class="list-group-item">Outline : <?=$gabung['outline']?></li>
       <li class="list-group-item">Tahun Angkatan : <?=$gabung['thn_angk']?></li>
       <li class="list-group-item">Foto : <img style="width: 100px; height: 100px" src="<?= base_url('assets/img/') . $gabung['foto']?>"></li>
  </ul>

  </div>
 
</div>
<?php endforeach?>
</div>
      </div>

