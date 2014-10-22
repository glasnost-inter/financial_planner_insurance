<?php 
include "open_connection.php";

if(isset($_GET['id_perusahaan'])){
	$id=$_GET['id_perusahaan'];	
	//echo $sql;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Navigation Tabbable Left</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
    </head>

    <body>		
        <div class="container">
			<div class="row" style="margin-top:10px">
				<div class="span6" style="border:1px solid #bbb;border-radius:10px;padding:10px 20px 10px 20px;margin:0 0 10px 0;width:1034px">
					<div class="tabbable tabs-left">
					<a href="data_peserta.php?id_perusahaan=<?=$id;?>" class="btn btn-warning">Batal Tambah Peserta</a>
					<br>
					<br>
					<form role="form" action="data_peserta.php" method="post">
					<input type="text" class="form-control" value="<?=$id;?>" name="id_perusahaan">
					 <div class="form-group">
						<label>NIK</label>
						<input type="text" class="form-control" name="nik" placeholder="Masukan NIK">
					  </div>
					  <div class="form-group">
						<label>Nama Peserta</label>
						<input type="text" class="form-control" name="nama_peserta" placeholder="Masukan Nama Peserta">
					  </div>
					  <div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="date" class="form-control" name="tgl_lahir" placeholder="Masukan Tanggal Lahir">
					  </div>
					  <div class="form-group">
						<label>Gaji</label>
						<input type="number" class="form-control" name="gaji" placeholder="Masukan Gaji">
					  </div>
					  <div class="form-group">
						<label>Premi Berkala</label>
						<input type="number" class="form-control" name="premi_berkala" placeholder="Masukan Premi Berkala">
					  </div>
					  <div class="form-group">
						<label>Premi Sekaligus</label>
						<input type="number" class="form-control" name="premi_sekaligus" placeholder="Masukan Premi Sekaligus">
					  </div>
					  <button type="submit" class="btn btn-default">Submit</button>
					</form>
					</div> <!-- /tabbable -->
				</div>			
			</div>
        </div>
		
   	  <script src="js/jquery.js"></script>
      <!-- Bootstrap javascript -->
      <script src="js/bootstrap.min.js"></script>
    </body>
</html>
<?php 
include "close_connection.php";
?>