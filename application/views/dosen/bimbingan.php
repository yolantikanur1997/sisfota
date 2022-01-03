<div class="content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card bg-light mb-3" style="max-width: 100%;">
  <div class="card-header"><?=$judul?></div>
  <div class="card-body">
   <div class="">
         <small><?=$this->session->flashdata('message')?></small>
       </div>
    
<div class="content">
  <div class="row">
 <div class="col-sm-12">
  <table id="tabel" class=" table-bordered" cellspacing="0" width="100%">
    <thead style="text-align: center;">
    <tr>  
      <th>No</th>
      <th>Mahasiswa</th>
      <th>Judul</th> 
      <th>Deskripsi</th>
      <th>Nama File</th>      
      <th>Keterangan</th> 
      <th>Opsi</th>
      
    </tr>
    </thead>
    <tbody style="text-align: center;">
      <?php        
    $id_bim = 1;
    foreach($lihat as $row) { ?>   
      <tr>
      <td><?=$id_bim++ ?></td>
      <td><?=$row['nm_mhs']; ?></td>
      <td><?=$row['p_judul']; ?></td>
      <td><?=$row['deskripsi']; ?></td>   
      <td><?=$row['up_file']; ?></td>   
      <td><?=$row['ket']; ?></td>
      <td> <a class="" title="Download File" style="cursor: pointer; text-decoration: none; color: black" href="<?= base_url();?>bimbingan/download/<?=$row['id_bim'];?>" ><i class="fa fa-file-download" ></i></a> | <a class="" title="Lihat" style="cursor: pointer; text-decoration: none; color: black" href="<?= base_url();?>bimbinganDosen/bimbinganDetail/<?=$row['id_bim'];?>" ><i class="fa fa-eye" ></i></a>
        | <a class="" title="Edit" style="cursor: pointer; text-decoration: none; color: black" href="<?= base_url();?>bimbinganDosen/bimbinganEdit/<?=$row['id_bim'];?>" ><i class="fa fa-edit" ></i></a>
      | <a class="" title="Cetak File" style="cursor: pointer; text-decoration: none; color: black" href="<?= base_url();?>laporanbimbingan/pdfdetails/<?=$row['id_bim'];?>" ><i class="fa fa-print" ></i></a> 
        </td>

      
    </tr>

    <?php } ?> 
    
    </tbody>
    </table>
  </div> 




 </div>
    
  </div>
</div>

          </div>
        </div>
      </div>
    </div>




      