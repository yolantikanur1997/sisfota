<div class="content">
        <div class="card" style="width:100%;">
  <div class="card-header">
    <?=$judul?>
  </div>
  <?php foreach ($gabung as $gabung) : ?>
    <div class="row">
      <div class="col-sm-12 mt-5">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">NIP Pembimbing: <?=$gabung['nip']?></li>
    <li class="list-group-item">Nama : <?=$gabung['nama']?></li>
    <li class="list-group-item">Alamat : <?=$gabung['alamat']?></li>
      <li class="list-group-item">Nomor Telepon : <?=$gabung['nmr_tlp']?></li>
       <li class="list-group-item">Email : <?=$gabung['email']?></li>
       <li class="list-group-item">Foto : <img style="width: 100px; height: 100px" src="<?= base_url('assets/img/') . $gabung['foto']?>"></li>
  </ul>
  </div>
 
</div>
<?php endforeach?>
</div>
      </div>

