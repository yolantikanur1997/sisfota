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
    <form action="<?= base_url('komentarDosen/simpanData');?>" method="POST">
    
      <div class="form-group row">

    <label  class="col-sm-2">Pembimbing</label>
    <div class="col-sm-10">
     <input type="text" id="id_pem" name="id_pem" class="form-control" value="<?=$user['nip'];?>" readonly>
    </div>

  </div> 
  <div class="form-group row">

    <label  class="col-sm-2">Mahasiswa</label>
    <div class="col-sm-10">
     <select name="id_mhs" id="id_mhs" class="form-control">
        <option>--Cari Mahasiswa--</option>
       <?php foreach($mahasiswa as $row) : ?>
                <option value="<?=$row['nim'];?>" class="form-control"><?=$row['nim'];?> | <?=$row['nm_mhs'];?>
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
    <h6>Pengguna : <?=$user['nama'];?></h6><br>
     <?php foreach($lihat as $row) { ?> 
  <p><?=$row['komen'];?> <i class="right"><b><?=$row['nm_mhs'];?></b> <a  onclick="return confirm('Anda Yakin?')" href="<?= base_url();?>komentarDosen/hapus/<?=$row['id_kom'];?>" style="color: red" title="Hapus"><i class="fa fa-times-circle"></i></a></i></p>
  <?php } ?> 


  </div>



 </div>
    </form>     
  </div>
</div>

          </div>
        </div>
      </div>

