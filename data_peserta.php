<?php 
include "open_connection.php";

if(isset($_POST['id_perusahaan'])){
	$sql="insert into klien (id_perusahaan,nik,nama_klien,tgl_lahir,gaji,premi,premi_sekaligus) 
		  values 
		  ('".$_POST['id_perusahaan']."','".$_POST['nik']."','".$_POST['nama_peserta']."','".$_POST['tgl_lahir']."','".$_POST['gaji']."','".$_POST['premi_berkala']."','".$_POST['premi_sekaligus']."')";
	$result = mysql_query($sql);
	//echo $sql;
	$id=$_POST['id_perusahaan'];	
}

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
					<a href="entry_data_peserta.php?id_perusahaan=<?=$id;?>" class="btn btn-default">Tambah Peserta</a>
					<a href="data_perusahaan.php" class="btn btn-default">Daftar Perusahaan</a>
					<br>
					<br>
						<table class="table table-bordered">
						  <tr>
							<th>
							No	
							</th>
							<th>
							NIK	
							</th>
							<th>
							Nama	
							</th>
							<th>
							Tanggal Lahir
							</th>
							<th>
							Gaji	
							</th>
							<th>
							Premi Berkala	
							</th>		
							<th>
							Premi Sekaligus	
							</th>
							<th>
							Action	
							</th>		
						  </tr>
						  <?php
						  $sql="select * from klien where id_perusahaan ='$id'";
						  $result = mysql_query($sql);	
						  $i=1;
						  while($row = mysql_fetch_array($result)){						  
						  ?>
						  <tr>
							<td>
							<?=$i++;?>	
							</td>
							<td>
							<?=$row['nik'];?>							
							</td>
							<td>
							<?=$row['nama_klien'];?>	
							</td>
							<td>
							<?=$row['tgl_lahir'];?>	
							</td>
							<td>
							<?=number_format($row['gaji'],0,",",".");?>
							</td>
							<td>							
							<?=number_format($row['premi'],0,",",".");?>
							</td>
							<td>							
							<?=number_format($row['premi_sekaligus'],0,",",".");?>
							</td>
							<td>
							<a href="simulasi_data_peserta.php?id_klien=<?=$row['id_klien'];?>" class="btn btn-default">Generate Simulasi</a>
							<a href="simulasi_data_peserta.php?id_klien=<?=$row['id_klien'];?>" class="btn btn-default">Simulasi Peserta</a>	
							</td>
						  </tr>
						  <?php
						  }
						  ?>	
						</table>
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