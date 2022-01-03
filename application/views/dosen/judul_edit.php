<div class="content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card bg-light mb-3" style="max-width: 100%;">
  <div class="card-header"><?=$judul?></div>
  <div class="card-body">
    <div class="">
         <small><?=$this->session->flashdata('message')?></small>
       </div>
      <?php foreach ($judulta as $p) : ?>
        <form action="<?php echo base_url().'dosen/updateJudul';?>" method="post">
    

  <div class="form-group row">

    <label  class="col-sm-2">Keterangan</label>
    <div class="col-sm-10">
      <input type="hidden" name="id_judul" value="<?=$p['id_judul']; ?>" class="form-control">
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
         <label  class="col-sm-2">Komentar</label>
         <div class="col-sm-10">
         <textarea name="komentar" id="komentar" class="form-control"><?=$p['komentar']?></textarea>
       </div>
      </div>

  
 
<div class="form-group row justify-content-end">
  <div class="col-sm-10">
    <button type="submit" class="btn btn-primary">Edit</button>
  </div>
</div>






    </form>  
    <?php endforeach ; ?>
   
  </div>
</div>

          </div>
        </div>
      </div>

