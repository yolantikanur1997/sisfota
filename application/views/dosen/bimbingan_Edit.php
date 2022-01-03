<div class="content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card bg-light mb-3" style="max-width: 100%;">
  <div class="card-header"><?=$judul?></div>
  <div class="card-body">
    <div class="">
         <small><?=$this->session->flashdata('message')?></small>
       </div>
      <?php foreach ($gabung as $p) : ?>
          <?=form_open_multipart('bimbinganDosen/updateBimbingan');?>

     <div class="form-group row">

    <label  class="col-sm-2">Deskripsi</label>
    <div class="col-sm-10">
      <input type="hidden" name="id_bim" value="<?=$p['id_bim']; ?>" class="form-control">
      <textarea name="deskripsi" id="deskripsi" class="form-control"><?=$p['deskripsi'];?></textarea>
       <small class="text-danger"><?=form_error('deskripsi');?></small>
    </div>
</div>

  <div class="form-group row">

    <label  class="col-sm-2">Keterangan</label>
    <div class="col-sm-10">
      
       <select name="ket" class="form-control">
      <?php foreach ($diterima as $k) : ?>
          <?php if ( $k == $p['ket'] ) : ?>
        <option value="<?= $k;?>" selected><?= $k;?></option>
        <?php else : ?>
                 <option value="<?= $k;?>"><?= $k;?></option>
        <?php endif; ?>
      <?php endforeach; ?>
      </select>
    </div>
  </div>
 <div class="form-group row">
    <div class="col-sm-2">
      <label>File</label></div>
    <div class="col-sm-10">
      <div class="row">
      <div class="col-sm-4">
      <label>File Lama : <?=$p['up_file']?></label></div>
      <div class="col-sm-9">
          <div class="custom-file">
          <input value="<?=$p['up_file']?>"  type="file" class="custom-file-input" id="berkas" name="berkas">
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
    <?php endforeach ; ?>
   
  </div>
</div>

          </div>
        </div>
      </div>

