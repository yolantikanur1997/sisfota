<div class="content">
        <div class="row">
          <div class="col-sm-12">
            <div class="card bg-light mb-3" style="max-width: 100%;">
<div class="col-sm-12">
  <table id="tabel" class=" table-bordered" cellspacing="0" width="100%">
    <thead style="text-align: center;">
    <tr>
      <th>No</th>
      <th>NIP</th>
      <th>Nama</th> 
      <th>Lihat Detail</th>
    </tr>
    </thead>
    <tbody style="text-align: center;">
      <?php        
    $id_judul = 1;
    foreach($dosen as $row) { ?>   
      <tr>
      <td><?=$id_judul++ ?></td>
      <td><?=$row['nip']; ?></td>
      <td><?=$row['nama']; ?></td>
      <td>
        <a href="<?= base_url();?>mahasiswaDosen/Detail/<?=$row['id_pem'];?>"><span class="fas fa-fw fa-eye" title="Edit"></span></a> 
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