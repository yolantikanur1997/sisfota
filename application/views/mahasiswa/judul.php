<div class="content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card bg-light mb-3" style="max-width: 100%;">
  <div class="card-header"><?=$judul?></div>
  <div class="card-body">
    <div class="">
         <small><?=$this->session->flashdata('message')?></small>
       </div>
    <form action="<?= base_url('mahasiswaJudul/simpanData');?>" method="POST">

  <div class="form-group row">

    <label  class="col-sm-2">NIM</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="id_mhs" name="id_mhs" value="<?=$user['nim']?>" readonly>
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
    <label  class="col-sm-2">Pengajuan Judul</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="p_judul" name="p_judul">
       <small class="text-danger"><?=form_error('p_judul');?></small>
    </div>
  </div>
    <div class="form-group row">
    <label  class="col-sm-2">Deksripsi</label>
    <div class="col-sm-10">
      <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
      <small class="text-danger"><?=form_error('deskripsi');?></small>
    </div>
  </div>
  
 
<div class="form-group row justify-content-end">
  <div class="col-sm-10">
    <button type="submit" class="btn btn-primary">Simpan</button>
  </div>
</div>

<div class="col-sm-12">
  <table id="tabel" class=" table-bordered" cellspacing="0" width="100%">
    <thead style="text-align: center;">
    <tr>
      <th>No</th>
      <th>Mahasiswa</th>
      <th>Pembimbing</th>
      <th>Judul</th> 
      <th>Deskripsi</th>
      <th>Keterangan</th>  
      <th>Komentar</th>  
      <th>Opsi</th>
    </tr>
    </thead>
    <tbody style="text-align: center;">
      <?php        
    $id_judul = 1;
    foreach($lihat as $row) { ?>   
      <tr>
      <td><?=$id_judul++ ?></td>
      <td><?=$row['nm_mhs']; ?></td>
      <td><?=$row['nama']; ?></td>
      <td><?=$row['p_judul']; ?></td>
      <td><?=$row['deskripsi']; ?></td>
      <td><?=$row['ket']; ?></td>
      <td><?=$row['komentar']; ?></td>
      <td>
        <a href="<?= base_url();?>mahasiswaJudul/Detail/<?=$row['id_judul'];?>"><span class="fas fa-fw fa-eye" title="Lihat"></span></a> |
         <a  onclick="return confirm('Anda Yakin?')" href="<?= base_url();?>mahasiswaJudul/hapus/<?=$row['id_judul'];?>" style="color: red" title="Hapus"><i class="fa fa-times-circle"></i></a>
      </td>
    </tr>

    <?php } ?> 
    
    </tbody>
    </table>
  </div>




 </div>
    </form>     
  </div>
</div>

          </div>
        </div>
      </div>

