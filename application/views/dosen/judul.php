<div class="content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card bg-light mb-3" style="max-width: 100%;">
  <div class="card-header"><?=$judul?></div>
  <div class="card-body">
   <div class="">
         <small><?=$this->session->flashdata('message')?></small>
       </div>
    
<div class="col-sm-12">
  <table id="tabel" class=" table-bordered" cellspacing="0" width="100%">
    <thead style="text-align: center;">
    <tr>
      <th>No</th>
      <th>Nama</th>
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
      <td><?=$row['p_judul']; ?></td>
      <td><?=$row['deskripsi']; ?></td>
      <td><?=$row['komentar']; ?></td>
      <td><?=$row['ket']; ?></td>
      <td>
        <a title="Edit" style="cursor: pointer; text-decoration: none; color: black" href="<?= base_url();?>dosen/editJudul/<?=$row['id_judul'];?>"><i class="fa fa-edit" ></i></a>
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

