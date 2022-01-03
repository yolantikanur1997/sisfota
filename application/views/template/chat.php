  <!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Chating</title>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://js.pusher.com/6.0/pusher.min.js"></script>
</head>
<body>
<div style="margin-right:22%;">
<div class="w3-container" style="height: 1000px">	
<div class="card bg-light mb-3" style="max-width: 100rem;">
  <div class="card-header">Pesan</div>
  <div class="card-body ">
    <h5 class="card-title">
    	<div id="pesan">
    	<?php foreach ($pesan as $pesan) {
		echo "<div class='row'>
    <div class='col-sm-8 mt-2'>
    <b><span>$pesan->nama</span></b>
    </div>
    <div class='col-sm-4' style='text-align:right'>
    <span style='color:red; cursor:pointer;'>x</span>
    </div></div>
    <div class='row'>
    <div class='col-sm-8 mt-2'>
    <span>$pesan->message</span>
    </div></div>";
	}
	?>
</div></h5>
    <div class="form-group">
    	<input type="text" name="nama" id="nama" class="form-control" value="<?php $this->fungsi->user_login()->nama ?>" disabled>
    </div>
    <div class="form-group">
       <input list="namadosen" class="form-control" placeholder="Cari ID Bimbingan Dosen / Nama Dosen" name="id" autocomplete="off">
       <datalist id="namadosen">
       <?php foreach($dosen as $row) : ?>
                <option value="<?=$row['id'],"||",$row['id_bimbingan'], "||" ,$row['nama_dosen'];?>" class="form-control">
      <?php endforeach; ?>             
      </datalist>
    </div>
    <div class="form-group">
    	<textarea name="message" id="message" placeholder="Pesan" class="form-control"></textarea>
    </div>
    <div class="form-group">
    	<input type="button" value="Kirim" class="btn btn-success btn-block" onclick="store();">
    </div>
  </div>
</div>
</div>
</div>

</body>
 <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('9e9ed6d0022f85fbaff5', {
      cluster: 'ap1',
      encrypted: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
     // alert(data.message);
     addData(data);
    });

    function addData(data){
    	var str = '';
    	for (var z in data){
    		str += '<p><span><b>'+data[z].nama+'</b></span><br><span>'+data[ z ].message+'</span></p>';
    	}
    	$('#pesan').html(str);
    }
  </script>

<script type="text/javascript">
 
 function store() {
		var value = {
			nama : $('#nama').val(),
			message : $('#message').val()
			}
			
			$.ajax({
				url : '<?=site_url();?>/Pages/store',
				type : 'POST',
				data : value,
				dataType : 'JSON'
			});
		}

</script>
</html>