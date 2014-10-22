<?php 
include "open_connection.php";
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
					<form role="form" action="" method="post">		
						<table>
							<tr>
								<td>
								Nama Perusahaan
								</td>
								<td>
								:
								</td>
								<td>
								<input type="text" name="nama_perusahaan" value="" />
								</td>
								<td>
								Mulai Asuransi
								</td>
								<td>
								:
								</td>
								<td>
								<input type="text" name="mulai_asuransi" value="" />
								</td>
								<td>
								Sampai Usia(SU)
								</td>
								<td>
								:
								</td>
								<td>
								<input type="text" name="su" value="" />
								</td>
								<td>
								Cara Bayar Premi
								</td>
								<td>
								:
								</td>
								<td>
								<select name="cb">
									<option value="1">Bulanan</option>
									<option value="2">Quartalan</option>
									<option value="3">Semesteran</option>
									<option value="4">Tahunan</option>
									<option value="X">Sekaligus</option>
								</select>
								</td>
								<td>
								Masa Pembayaran Berkala
								</td>
								<td>
								:
								</td>
								<td>
								<select name="masabkl">
									<option value="bkl5">5 Tahun</option>
									<option value="bkl6">6 Tahun</option>									
								</select>
								</td>
							</tr>
						</table>
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