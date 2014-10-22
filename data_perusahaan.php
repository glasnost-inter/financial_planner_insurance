<?php 
include "open_connection.php";

if(isset($_POST['nama_perusahaan'])){
	$sql="insert into perusahaan (nama_perusahaan,mulai_asuransi,su,cb_premi,masa_bkl) values ('".$_POST['nama_perusahaan']."','".$_POST['mulas']."','".$_POST['su']."','".$_POST['cb_premi']."','".$_POST['masa_bkl']."')";
	$result = mysql_query($sql);
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
					<a href="entry_data_perusahaan.php" class="btn btn-default">Tambah Perusahaan</a>
					<br>
					<br>
						<table class="table table-bordered">
						  <tr>
							<th>
							No	
							</th>
							<th>
							Nama Perusahaan	
							</th>
							<th>
							Mulas	
							</th>
							<th>
							Usia Pensiun(SU)	
							</th>
							<th>
							Cara Bayar Premi	
							</th>
							<th>
							Masa Pembayaran Berkala	
							</th>
							<th>
							Action
							</th>
						  </tr>
						  <?php
						  $sql="select * from perusahaan";
						  $result = mysql_query($sql);	
						  $i=1;
						  while($row = mysql_fetch_array($result)){						  
						  ?>
						  <tr>
							<td>
							<?=$i++;?>	
							</td>
							<td>
							<?=$row['nama_perusahaan'];?>							
							</td>
							<td>
							<?=$row['mulai_asuransi'];?>	
							</td>
							<td>
							<?=$row['su'];?>	
							</td>
							<td>
							<?=$row['cb_premi'];?>	
							</td>
							<td>
							<?=$row['masa_bkl'];?>	
							</td>
							<td>
							<a href="data_peserta.php?id_perusahaan=<?=$row['id_perusahaan'];?>" class="btn btn-default">Tambah Peserta</a>	
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