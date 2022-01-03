<style type="text/css">
.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

/* Darker chat container */
.darker {
  border-color: #ccc;
  background-color: #ddd;
}

/* Clear floats */
.container::after {
  content: "";
  clear: both;
  display: table;
}


/* Style the right image */
.container .right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

/* Style time text */
.time-right {
  float: right;
  color: #aaa;
}

/* Style time text */
.time-left {
  float: left;
  color: #999;
}
</style>


<div class="content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card bg-light mb-3" style="max-width: 100%;">
  <div class="card-header"><?=$judul?></div>
  <div class="card-body">
    <div class="">
         <small><?=$this->session->flashdata('message')?></small>
       </div>
    <form action="<?= base_url('komentarMahasiswa/simpanData');?>" method="POST">
    
      <div class="form-group row">

    <label  class="col-sm-2">Mahasiswa</label>
    <div class="col-sm-10">
     <input type="text" id="id_mhs" name="id_mhs" class="form-control" value="<?=$user['nim'];?>" readonly>
    </div>

  </div> 
  <div class="form-group row">

    <label  class="col-sm-2">Pembimbing</label>
    <div class="col-sm-10">
     <select name="id_pem" id="id_pem" class="form-control">
        <option>--Cari Pembimbing--</option>
       <?php foreach($dosen as $row) : ?>
                <option value="<?=$row['nip'];?>" class="form-control"><?=$row['nip'];?> | <?=$row['nama'];?>
            <?php endforeach; ?>    
      </select>
    </div>

  </div> 


  <div class="form-group row">
    <label  class="col-sm-2">Komentar</label>
    <div class="col-sm-10">
      <textarea name="komentar" id="komentar" class="form-control"></textarea>
       <small class="text-danger"><?=form_error('komentar');?></small>
    </div>
  </div>

  
 
<div class="form-group row justify-content-end">
  <div class="col-sm-10">
    <button type="submit" class="btn btn-primary">Simpan</button>
  </div>
</div>

<!-- tampilkan komen -->
<div class="col-sm-12">
  <div class="container darker">
     <h6>Pengguna : <?=$user['nm_mhs'];?></h6><br>
    <?php foreach($lihat as $row) { ?> 
   
     
  <p><?=$row['komen'];?> <i class="right"><b><?=$row['nama'];?></b> <a  onclick="return confirm('Anda Yakin?')" href="<?= base_url();?>komentarMahasiswa/hapus/<?=$row['id_kom'];?>" style="color: red" title="Hapus"><i class="fa fa-times-circle"></i></a></i></p>
  <?php } ?> 

  </div>
 </div>
    </form>     
  </div>
</div>

          </div>
        </div>
      </div>

