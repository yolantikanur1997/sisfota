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
    <li class="list-group-item"><b>NIP</b> : <?=$user['nip']?></li>
    <li class="list-group-item"><b>Nama</b> : <?=$user['nama']?></li>    
    <li class="list-group-item"><b>Alamat</b> : <?=$user['alamat']?></li>
    <li class="list-group-item"><b>Nomor Telepon</b> : <?=$user['nmr_tlp']?></li>
    <li class="list-group-item"><b>Email</b> : <?=$user['email']?></li>
    <li class="list-group-item"><a href="<?=base_url('dosen/edit')?>"><button class="btn btn-danger">Edit</button></a></li>
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



