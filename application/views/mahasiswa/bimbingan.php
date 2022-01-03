<div class="content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card bg-light mb-3" style="max-width: 100%;">
  <div class="card-header"><?=$judul?></div>
  <div class="card-body">
    <div class="">
         <small><?=$this->session->flashdata('message')?></small>
       </div>
    <form action="<?= base_url('bimbingan/simpanData');?>" method="POST" enctype="multipart/form-data">

       <div class="form-group row">

    <label  class="col-sm-2">Mahasiswa</label>
    <div class="col-sm-10">
     <input type="text" id="id_mhs" name="id_mhs" class="form-control" value="<?=$user['nim'];?>" readonly>
    </div>

  </div> 
    <div class="form-group row">

    <label  class="col-sm-2">Judul</label>
    <div class="col-sm-10">
     <select name="id_judul" id="id_judul" class="form-control">
        <option>--Cari Judul--</option>
       <?php foreach($gabung as $row) : ?>
                <option value="<?=$row['id_judul'];?>" class="form-control"><?=$row['p_judul'];?>
            <?php endforeach; ?>    
      </select>
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
    <label  class="col-sm-2">Deskripsi</label>
    <div class="col-sm-10">
      <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
       <small class="text-danger"><?=form_error('deskripsi');?></small>
    </div>
  </div>
    <div class="form-group row">
    <label  class="col-sm-2">File</label>
    <div class="col-sm-10">
       <div class="custom-file">
          <input type="file" id="berkas" name="berkas" class="custom-file-input" >
          <label class="custom-file-label" for="customFile">Choose file</label>
</div>
      <small class="text-danger"><?=form_error('berkas');?></small>
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
      <th>Nama File</th>      
      <th>Keterangan</th> 
      <th colspan="2">Opsi</th>
      
    </tr>
    </thead>
    <tbody style="text-align: center;">
      <?php        
    $id_bim = 1;
    foreach($lihat as $row) { ?>   
      <tr>
      <td><?=$id_bim++ ?></td>
      <td><?=$row['nm_mhs']; ?></td>
      <td><?=$row['nama']; ?></td>
      <td><?=$row['p_judul']; ?></td>
      <td><?=$row['deskripsi']; ?></td>    
      <td><?=$row['up_file']; ?></td>  
      <td><?=$row['ket']; ?></td>
      <td> <a class="" title="Download File" style="cursor: pointer; text-decoration: none; color: black" href="<?= base_url();?>bimbingan/download/<?=$row['id_bim'];?>" ><i class="fa fa-file-download" ></i></a> | <a class="" title="Cetak File" style="cursor: pointer; text-decoration: none; color: black" href="<?= base_url();?>laporanbimbingan/pdfdetails/<?=$row['id_bim'];?>" ><i class="fa fa-print" ></i></a> 
        |
         <a  onclick="return confirm('Anda Yakin?')" href="<?= base_url();?>bimbingan/hapus/<?=$row['id_bim'];?>" style="color: red" title="Hapus"><i class="fa fa-times-circle"></i></a>
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

