<div class="content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card bg-light mb-3" style="max-width: 100%;">
  <div class="card-header"><?=$judul?></div>
  <div class="card-body">
     <?=form_open_multipart('mahasiswa/edit');?>
    <div class="form-group row">
    <label class="col-sm-2">NIM</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nim" name="nim" value="<?=$user['nim']?>" readonly>

    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nm_mhs" name="nm_mhs" value="<?=$user['nm_mhs']?>">
       <small class="text-danger"><?=form_error('nm_mhs');?></small>
    </div>

  </div>
  <div class="form-group row">
    <label  class="col-sm-2">Jenis Kelamin</label>
    <div class="col-sm-10">
     <select name="j_kelamin" class="form-control">
      <?php foreach ($jk as $k) : ?>
          <?php if ( $k == $user['j_kelamin'] ) : ?>
        <option value="<?= $k;?>" selected><?= $k;?></option>
        <?php else : ?>
                 <option value="<?= $k;?>"><?= $k;?></option>
        <?php endif; ?>
      <?php endforeach; ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2">Prodi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="prodi" name="prodi" value="<?=$user['prodi']?>">
       <small class="text-danger"><?=form_error('prodi');?></small>
    </div>
  </div>
    <div class="form-group row">
    <label  class="col-sm-2">Outline</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="outline" name="outline" value="<?=$user['outline']?>">
      <small class="text-danger"><?=form_error('outline');?></small>
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2">Tahun Angkatan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="thn_angk" name="thn_angk" value="<?=$user['thn_angk']?>">
       <small class="text-danger"><?=form_error('thn_angk');?></small>
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
        </div>
      </div>



  
 