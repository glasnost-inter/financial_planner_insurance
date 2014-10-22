<?php 
include "open_connection.php";

if(isset($_GET['id_klien'])){
	$id=$_GET['id_klien'];	
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

	<?php
	$sql="select * from klien where id_klien ='$id'";
	$result = mysql_query($sql);		
	$row = mysql_fetch_array($result);	
	?>
	
    <body>		
        <div class="container">
			<div class="row" style="margin-top:10px">
				<div class="span6" style="border:1px solid #bbb;border-radius:10px;padding:10px 20px 10px 20px;margin:0 0 10px 0;width:1034px">
					<div class="tabbable tabs-left">
					<a href="data_peserta.php?id_peserta=<?=$id;?>" class="btn btn-warning">Batal Generate Simulasi Peserta</a>
					<br>
					<br>
					<form role="form" action="simulasi_data_peserta.php" method="post">					
					 <div class="form-group">
						<label>NIK</label>
						<input type="text" class="form-control" name="nik" value="<?=$row['nik'];?>">
					  </div>
					  <br>
					  <div class="form-group">
						<label>Nama Peserta</label>
						<input type="text" class="form-control" name="nama_peserta" value="<?=$row['nama_klien'];?>">
					  </div>
					  <br>
					  <div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="date" class="form-control" name="tgl_lahir" value="<?=$row['tgl_lahir'];?>">
					  </div>
					  <br>
					  <div class="form-group">
						<label>Gaji</label>
						<input type="number" class="form-control" name="gaji" value="<?=$row['gaji'];?>">
					  </div>
					  <br>
					  <div class="form-group">
						<label>Premi Berkala</label>
						<input type="number" class="form-control" name="premi_berkala" value="<?=$row['premi'];?>">
					  </div>
					  <div class="form-group">
						<label>Premi Sekaligus</label>
						<input type="number" class="form-control" name="premi_sekaligus" value="<?=$row['premi_sekaligus'];?>">
					  </div>
					  <br>
					  <div class="form-group">
						<label>Manfaat Akhir Kepesertaan</label>											
						<label>Dari Premi Berkala</label>
						<input type="number" class="form-control" name="premi_sekaligus" placeholder="Dari Premi Berkala">
						<label>Dari Premi Sekaligus</label>
						<input type="number" class="form-control" name="premi_sekaligus" placeholder="Dari Premi Sekaligus">	
						<label>Jumlah Manfaat</label>
						<input type="number" class="form-control" name="premi_sekaligus" placeholder="Jumlah Manfaat">							
					  </div>
					  <br>
					  <div class="form-group">
						<label>Uang Asuransi Meninggal Dunia</label>											
						<label>Dari Premi Berkala</label>
						<input type="number" class="form-control" name="premi_sekaligus" placeholder="Dari Premi Berkala">
						<label>Dari Premi Sekaligus</label>
						<input type="number" class="form-control" name="premi_sekaligus" placeholder="Dari Premi Sekaligus">	
						<label>Jumlah Manfaat</label>
						<input type="number" class="form-control" name="premi_sekaligus" placeholder="Jumlah Manfaat">							
					  </div>
					  <br>
					  <div class="form-group">
						<label>Manfaat Bulanan</label>											
						<label>5 Tahun</label>
						<input type="number" class="form-control" name="premi_sekaligus" placeholder="5 Tahun">
						<label>6 Tahun</label>
						<input type="number" class="form-control" name="premi_sekaligus" placeholder="6 Tahun">							
					  </div>
					  <br>
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