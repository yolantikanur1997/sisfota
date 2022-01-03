<div class="content">
        <div class="row">
          <div class="col-sm-12">
          <?=form_open_multipart('dosen/edit');?>
    <div class="form-group row">
    <label class="col-sm-2">NIP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nip" name="nip" value="<?=$user['nip']?>" readonly>

    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama" value="<?=$user['nama']?>">
       <small class="text-danger"><?=form_error('nama');?></small>
    </div>

  </div>
    <div class="form-group row">
    <label  class="col-sm-2">Alamat</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" id="alamat" name="alamat"><?=$user['alamat']?></textarea>
      <small class="text-danger"><?=form_error('alamat');?></small>
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2">Nomor Telepon</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nmr_tlp" name="nmr_tlp" value="<?=$user['nmr_tlp']?>">
       <small class="text-danger"><?=form_error('nmr_tlp');?></small>
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" name="email" value="<?=$user['email']?>">
       <small class="text-danger"><?=form_error('email');?></small>
    </div>
  </div>
    <div class="form-group row">
    <div class="col-sm-2">
      <label>Foto</label></div>
    <div class="col-sm-10">
      <div class="row">
      <div class="col-sm-3">
        <img src="<?= base_url('assets/img/') . $user['foto']?>" class="img-thumbnail"></div>
      <div class="col-sm-9">
          <div class="custom-file">
          <input type="file" class="custom-file-input" id="foto" name="foto">
          <label class="custom-file-label" for="customFile">Choose file</label>
</div>
</div>
      </div>
      </div>
    </div>
 
<div class="form-group row justify-content-end">
  <div class="col-sm-10">
    <button type="submit" class="btn btn-primary">Edit</button>
  </div>
</div>
 </div>
    </form>      
          </div>
        </div>
      </div>



  
 