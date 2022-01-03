<div class="content">
        <div class="row">
          <div class="col-sm-12">
           <div class="row">
        <div class="col-sm-6 mb-3">
          <?= $this->session->flashdata('message')?>
        </div>
      </div>
<div class="card mb-3" style="max-width: 540px;">
 
  <div class="row no-gutters">

    <div class="col-md-5">
      <img src="<?= base_url('assets/img/') . $user['foto']?>" class="card-img" alt="...">
    </div>
    <div class="col-md-7">     
           
      <div class="card-body">        
        <div class="card" style="width: 50rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><b>NIM</b> : <?=$user['nim']?></li>
    <li class="list-group-item"><b>Nama</b> : <?=$user['nm_mhs']?></li>
    <li class="list-group-item"><b>Jenis Kelamin</b> : <?=$user['j_kelamin']?></li>
    <li class="list-group-item"><b>Prodi</b> : <?=$user['prodi']?></li>
    <li class="list-group-item"><b>Outline</b> : <?=$user['outline']?></li>
    <li class="list-group-item"><b>Tahun Angkatan</b> : <?=$user['thn_angk']?></li>
    <li class="list-group-item"><a href="<?=base_url('mahasiswa/edit')?>"><button class="btn btn-danger">Edit</button></a></li>
  </ul>
</div>
      </div>
    </div>
  </div>
</div>

          </div>
        </div>
      </div>
    </div><!--/.row-->
    
    
      <div class="col-sm-12">
        <p class="back-link">SISFOTA</p>
      </div>
          </div>
        </div>
      </div>



