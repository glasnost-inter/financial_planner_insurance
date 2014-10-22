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
					<a href="data_perusahaan.php" class="btn btn-warning">Batal Tambah Perusahaan</a>
					<br>
					<br>
					<form role="form" action="data_perusahaan.php" method="post">
					  <div class="form-group">
						<label>Nama Perusahaan</label>
						<input type="text" class="form-control" name="nama_perusahaan" placeholder="Masukan Nama Perusahaan">
					  </div>
					  <div class="form-group">
						<label>Mulai Asuransi</label>
						<input type="date" class="form-control" name="mulas" placeholder="Masukan Mulai Asuransi">
					  </div>
					  <div class="form-group">
						<label>Usia Pensiun(SU)</label>
						<input type="number" class="form-control" name="su" placeholder="Masukan Usia Pensiun">
					  </div>
					  <div class="form-group">
						<label>Cara Bayar Premi</label>
					    <label class="radio-inline">
						  <input type="radio" name="cb_premi" id="inlineRadio1" value="1"> Bulanan
						</label>
						<label class="radio-inline">
						  <input type="radio" name="cb_premi" id="inlineRadio2" value="2"> Kuartalan
						</label>
						<label class="radio-inline">
						  <input type="radio" name="cb_premi" id="inlineRadio3" value="3"> Semesteran
						</label>
						<label class="radio-inline">
						  <input type="radio" name="cb_premi" id="inlineRadio3" value="4"> Tahunan
						</label>
						<label class="radio-inline">
						  <input type="radio" name="cb_premi" id="inlineRadio3" value="X"> Sekaligus
						</label>
					  </div>
					  <div class="form-group">
						<label>Masa Pembayaran Berkala</label>
					    <label class="radio-inline">
						  <input type="radio" name="masa_bkl" id="inlineRadio1x" value="5bkl"> 5 Tahun
						</label>
						<label class="radio-inline">
						  <input type="radio" name="masa_bkl" id="inlineRadio2x" value="6bkl"> 6 Tahun
						</label>						
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