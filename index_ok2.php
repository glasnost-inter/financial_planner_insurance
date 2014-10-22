<?php 
include "open_connection.php";
//inisialisasi data klien
$sql = "select * from klien where id_klien = '1'";	
//echo $sql;				
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
$nama_klien = $row['nama_klien'];
$tgl_lahir = $row['tgl_lahir'];
$tgl_expirasi = $row['tgl_expirasi'];
$tgl_akhir_masa = $row['tgl_akhir_masa'];
$tgl_meninggal = $row['tgl_meninggal'];
$tgl_berhenti = $row['tgl_berhenti'];
//number_format($row[1],0,',','.');
$nilai_expirasi = number_format($row['nilai_expirasi'],0,',','.');
$nilai_meninggal = number_format($row['nilai_meninggal'],0,',','.');
$nilai_berhenti = number_format($row['nilai_berhenti'],0,',','.');
$nilai_beasiswa = number_format($row['nilai_beasiswa'],0,',','.');
$nilai_cacat = number_format($row['nilai_cacat'],0,',','.');
$nilai_meninggal_kecelakaan = number_format($row['nilai_meninggal_kecelakaan'],0,',','.');
$nilai_premi = number_format($row['premi'],0,',','.');
/*
echo 'nama_klien '.$nama_klien.'<br>';
echo 'tgl_lahir '.$tgl_lahir.'<br>';
echo 'tgl_expirasi '.$tgl_expirasi.'<br>';
echo 'tgl_akhir_masa '.$tgl_akhir_masa.'<br>';
echo 'nilai_expirasi '.$nilai_expirasi.'<br>';
echo 'nilai_meninggal '.$nilai_meninggal.'<br>';
echo 'nilai_berhenti '.$nilai_berhenti.'<br>';
echo 'nilai_beasiswa '.$nilai_beasiswa.'<br>';
*/
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
					  
					  <ul class="nav nav-tabs">					  
					  <?php																
						$sqlx = "select nama_produk from produk";
						//echo $sqlx;		
						$resultx = mysql_query($sqlx);
						$i = 1;
						while($rowx = mysql_fetch_array($resultx))
						{
							if ($i==1){
							?>
								<li class="active"><a href="#A<?=$i;?>" data-toggle="tab"><?=$rowx['nama_produk'];?></a></li>
							<?php
							}
							else
							{
							  ?>							  
							  <li><a href="#A<?=$i;?>" data-toggle="tab"><?=$rowx['nama_produk'];?></a></li>
							  <?php
							}
							$i++;
						}
							?>                                    
					  </ul>
					  <div class="tab-content" style="width:750px">
						<div class="tab-pane active" id="A1">
						  <div class="span7" style="border:1px solid #bbb;border-radius:10px;padding:10px;margin:0 0 0 0;width:720px">
				<!-- kontainer kolom -->
					
					<ul id="myTab" class="nav nav-tabs">
					  <li class="active"><a href="#home" data-toggle="tab">Resume Produk</a></li>
					  <li><a href="#kondisi" data-toggle="tab">Keadaan Dalam Masa Asuransi</a></li>
                      <li><a href="#cashflow_benefit" data-toggle="tab">Cash Flow Benefit</a></li>
                      <li><a href="#cashflow_premi" data-toggle="tab">Cash Flow Premi</a></li>
                      <li><a href="#profile" data-toggle="tab">Ilustrasi</a></li>					  
					</ul>
					<div id="myTabContent" class="tab-content">
					  <!-- home -->
                      <div class="tab-pane fade in active" id="home">
						<h2>JS Proteksi Educare</h2>
						<h3>&quot;Proteksi dari Lahir sampai Tutup usia&quot; </h3>
						<p>
                        <!--ol>
                        	<li>Skema Program
                            	<ul>
                                	<li class="icon-ok">Arthadana</li>
                                    <li class="icon-ok">Beasiswa</li>
                                </ul>
                            </li>
                            <li>Bentuk Program</li>
                        </ol--> 
								<h4>Skema Program</h4>
                                <ul class="unstyled">
                                    <li><i class="icon-ok"></i> Arthadana
                                        <ol style="list-style-type:lower-alpha">
                                            <li>Jaminan Hari Tua
                                            	<div>Pembayaran sejumlah Uang yang disebut Nilai Tunai pada saat berhenti bekerja.</div>
                                            </li>
                                            <li>Jaminan Kematian
                                            	<div>Apabila dalam masa asuransi Tertanggung/Peserta meninggal dunia 
                                                     (bukan karena kecelakaan) maka akan dibayarkan :
                                     				<ul>
                                                        <li>100% Uang Asuransi Kematian biasa</li>
                                                        <li>Nilai Tunai</li>
                                                    </ul>           
                                                </div>
                                            </li>
                                            <li>Jaminan Kecelakaan
                                            	<div>Apabila dalam masa asuransi Pegawai/Karyawan yang menjadi 
                                                     Tertanggung/Peserta oleh suatu sebab kecelakaan yang dialami mengakibatkan :
                                     				<ul>
                                                        <li>Meninggal dunia, akan dibayarkan :
                                                        	<ul>
                                                                <li>200% Uang Asuransi Kematian biasa</li>
                                                                <li>Nilai Tunai</li>
                                                            </ul>
                                                        </li>
                                                        <li>Cacat Tetap Total
                                                        	<div>100 % dari Uang  Asuransi Kematian biasa jika Tertanggung/ Peserta 
                                                                 mengalami cacat tetap total
                                                            </div>
                                                        </li>
                                                    </ul>           
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                                    <li><i class="icon-ok"></i> Beasiswa
                                        <ol style="list-style-type:lower-alpha">
                                            <li>Pembayaran Tahapan 10% dari Uang Asuransi untuk Putra /  putri pada saat usia 6 Th</li>
											<li>Pembayaran Tahapan 20% dari Uang Asuransi untuk putra / putri pada saat usia 12 th</li>
											<li>Pembayaran Tahapan 30% dari Uang Asuransi untuk putra / putri pada saat usia 15 th</li>
											<li>Pembayaran Tahapan 50% dari Uang Asuransi untuk putra / putri pada saat usia 18 th</li>
											<li>Pembayaran Bea Siswa selama di PT dari Uang Asuransi dibagi 5 th</li>
                                        </ol>
                                    </li>
                                </ul>
                        </p>
					  </div>
                      <!-- home -->
                      <!-- profile -->
					  <div class="tab-pane fade" id="profile">
						<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
					  </div>
                      <!-- profile -->
                      <!-- cashflow benefit -->
                      <div class="tab-pane fade in active" id="cashflow_benefit">
                        <div class="span6" style="border:1px solid #bbb;border-radius:10px;padding:10px 20px 10px 20px;margin-left:0px;margin-bottom:10px">	                      		
                            <legend>Jaminan Uang Asuransi dan Nilai Tebus</legend>
                            <label>Jaminan Uang Asuransi</label>
                        	<div class="input-prepend input-append">                            	
								<span class="add-on">Rp</span>
								<input class="span2" id="appendedPrependedInput" type="text" value="<?=$nilai_meninggal;?>" style="text-align:right">
								<span class="add-on">,00</span>
							</div>                            
                            <label>Nilai Tunai s.d. Tgl 01/02/2014</label>
                            <div class="input-prepend input-append">                            	
								<span class="add-on">Rp</span>
								<input class="span2" id="appendedPrependedInput" type="text"  value="<?=$nilai_berhenti;?>" style="text-align:right">
								<span class="add-on">,00</span>
							</div>
                        </div>
                        <br><br><br><br><br><br><br><br><br><br><br>
                        <div class="accordion" id="accordion2">
                        <!-- accordion 11-->			
                        <div class="accordion-group">
                          <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse01022014">
                              Benefit jatuh tempo tahun 2014 sebesar Rp. 50.000.000,00. <br>
							  Sudah diklaim sebesar Rp. 50.000.000,00 <br>
							  Belum diklaim sebesar	Rp. 0,00
                            </a>
                          </div>
                          <div id="collapse01022014" class="accordion-body collapse">
                            <div class="accordion-inner">							                                
                                        <div>                              
                                          </div>
                                          <table class="table table-striped table-bordered table-hover" style="font-size:11px">
                                           <tr>
                                            <th>No</th>
                                            <th>Nama Benefit</th>
                                            <th>Tgl Jatuh Tempo</th>
                                            <th>Tgl Pengajuan</th>
                                            <th>Tgl Pembayaran</th>
                                            <th>Nilai Klaim</th>
                                            <th>Potongan</th>
                                            <th>Nilai Dibayarkan</th>
                                            <th>Cara Bayar</th>
                                            <th>Penerima</th>
                                            <th>Bukti Setor</th>
                                           </tr>
                               <tr>
                                <td>1</td>
                                <td>Tahapan SD</td>
                                <td>01/02/2014</td>
                                <td>05/02/2014</td>
                                <td>05/02/2014</td>
                                <td>50.000.000</td>
                                <td>0</td>
                                <td>50.000.000</td>
                                <td>Kas</td>
                                <td>Diri Tertanggung</td>
                                <td>BS.001/38354</td>
                              </tr>				  				  
                              </table>   
							</div>
						  </div>
						</div>
                        <!-- end accordion 11 -->
                                                <!-- accordion 12-->			
                        <div class="accordion-group">
                          <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse01022020">
                              Benefit jatuh tempo tahun 2020 sebesar Rp. 100.000.000,00. <br>
							  Sudah diklaim sebesar Rp. 0,00 <br>
							  Belum diklaim sebesar	Rp. 100.000.000,00						  
                            </a>
                          </div>
                          <div id="collapse01022020" class="accordion-body collapse">
                            <div class="accordion-inner">							                                
                                        <div>                              
                                          </div>
                                          <table class="table table-striped table-bordered table-hover" style="font-size:11px">
                                           <tr>
                                            <th>No</th>
                                            <th>Nama Benefit</th>
                                            <th>Tgl Jatuh Tempo</th>
                                            <th>Tgl Pengajuan</th>
                                            <th>Tgl Pembayaran</th>
                                            <th>Nilai Klaim</th>
                                            <th>Potongan</th>
                                            <th>Nilai Dibayarkan</th>
                                            <th>Cara Bayar</th>
                                            <th>Penerima</th>
                                            <th>Bukti Setor</th>
                                           </tr>
                               <tr>
                                <td>1</td>
                                <td>Tahapan SMP</td>
                                <td>01/02/2020</td>
                                <td></td>
                                <td></td>
                                <td>100.000.000</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>				  				  
                              </table>   
							</div>
						  </div>
						</div>
                        <!-- end accordion 12 -->
                                                <!-- accordion 13-->			
                        <div class="accordion-group">
                          <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse01022023">
                              Benefit jatuh tempo tahun 2023 sebesar Rp. 150.000.000,00. <br>
							  Sudah diklaim sebesar Rp. 0,00 <br>
							  Belum diklaim sebesar	Rp. 150.000.000,00						  
                            </a>
                          </div>
                          <div id="collapse01022023" class="accordion-body collapse">
                            <div class="accordion-inner">							                                
                                        <div>                              
                                          </div>
                                          <table class="table table-striped table-bordered table-hover" style="font-size:11px">
                                           <tr>
                                            <th>No</th>
                                            <th>Nama Benefit</th>
                                            <th>Tgl Jatuh Tempo</th>
                                            <th>Tgl Pengajuan</th>
                                            <th>Tgl Pembayaran</th>
                                            <th>Nilai Klaim</th>
                                            <th>Potongan</th>
                                            <th>Nilai Dibayarkan</th>
                                            <th>Cara Bayar</th>
                                            <th>Penerima</th>
                                            <th>Bukti Setor</th>
                                           </tr>
                               <tr>
                                <td>1</td>
                                <td>Tahapan SMU</td>
                                <td>01/02/2023</td>
                                <td></td>
                                <td></td>
                                <td>150.000.000</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>				  				  
                              </table>   
							</div>
						  </div>
						</div>
                        <!-- end accordion 13 -->						                        
                        <!-- accordion 14-->			
                        <div class="accordion-group">
                          <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse01022026">
                              Benefit jatuh tempo tahun 2026 sebesar Rp. 341.666.663,00. <br>
							  Sudah diklaim sebesar Rp. 0,00 <br>
							  Belum diklaim sebesar	Rp. 341.666.663,00						  
                            </a>
                          </div>
                          <div id="collapse01022026" class="accordion-body collapse">
                            <div class="accordion-inner">							                                
                                        <div>                              
                                          </div>
                                          <table class="table table-striped table-bordered table-hover" style="font-size:10px">
                                           <tr>
                                            <th>No</th>
											<th>Nama Benefit</th>
                                            <th>Tgl Jatuh Tempo</th>
                                            <th>Tgl Pengajuan</th>
                                            <th>Tgl Pembayaran</th>
                                            <th>Nilai Klaim</th>
                                            <th>Potongan</th>
                                            <th>Nilai Dibayarkan</th>
                                            <th>Cara Bayar</th>
                                            <th>Penerima</th>
                                            <th>Bukti Setor</th>
                                           </tr>
                               <tr>
                                <td>1</td>
								<td>Tahapan Perguruan Tinggi</td>
                                <td>01/02/2026</td>
                                <td></td>
                                <td></td>
                                <td>200.000.000</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>				  				  
							  <tr>
                                <td>2</td>
								<td>Nilai Tunai Expirasi</td>
                                <td>01/02/2026</td>
                                <td></td>
                                <td></td>
                                <td>50.000.000</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
							  <tr>
                                <td>3</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/03/2026</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
							  <tr>
                                <td>4</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/04/2026</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
							<tr>
                                <td>5</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/05/2026</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
							<tr>
                                <td>6</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/06/2026</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>  
							<tr>
                                <td>7</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/06/2026</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr> 
							<tr>
                                <td>8</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/07/2026</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>  
							<tr>
                                <td>9</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/08/2026</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
							<tr>
                                <td>10</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/09/2026</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>  
							<tr>
                                <td>11</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/10/2026</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>  
							<tr>
                                <td>12</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/11/2026</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>  
							<tr>
                                <td>13</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/12/2026</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>  
                              </table>   
							</div>
						  </div>
						</div>
                        <!-- end accordion 14 -->
                        <!-- accordion 15-->			
                        <div class="accordion-group">
                          <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse01022027">
                              Benefit jatuh tempo tahun 2027 sebesar Rp. 99.999.996,00. <br>
							  Sudah diklaim sebesar Rp. 0,00 <br>
							  Belum diklaim sebesar	Rp. 99.999.996,00						  
                            </a>
                          </div>
                          <div id="collapse01022027" class="accordion-body collapse">
                            <div class="accordion-inner">							                                
                                        <div>                              
                                          </div>
                                          <table class="table table-striped table-bordered table-hover" style="font-size:10px">
                                           <tr>
                                            <th>No</th>
											<th>Nama Benefit</th>
                                            <th>Tgl Jatuh Tempo</th>
                                            <th>Tgl Pengajuan</th>
                                            <th>Tgl Pembayaran</th>
                                            <th>Nilai Klaim</th>
                                            <th>Potongan</th>
                                            <th>Nilai Dibayarkan</th>
                                            <th>Cara Bayar</th>
                                            <th>Penerima</th>
                                            <th>Bukti Setor</th>
                                           </tr>
                              <tr>
                                <td>1</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/01/2027</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
							<tr>
                                <td>2</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/02/2027</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
							<tr>
                                <td>3</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/03/2027</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
							  <tr>
                              <td>4</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/04/2027</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
							  <tr>
                                <td>5</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/05/2027</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
							<tr>
                                <td>6</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/06/2027</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
							<tr>
                                <td>7</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/07/2027</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr> 
							<tr>
                                <td>8</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/08/2027</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>  
							<tr>
                                <td>9</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/09/2027</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
							<tr>
                                <td>10</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/10/2027</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>  
							<tr>
                                <td>11</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/11/2027</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>  
							<tr>
                                <td>12</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/12/2027</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>  							  
                              </table>   
							</div>
						  </div>
						</div>
                        <!-- end accordion 15 -->
						                        <!-- accordion 16-->			
                        <div class="accordion-group">
                          <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse01022028">
                              Benefit jatuh tempo tahun 2028 sebesar Rp. 99.999.996,00. <br>
							  Sudah diklaim sebesar Rp. 0,00 <br>
							  Belum diklaim sebesar	Rp. 99.999.996,00						  
                            </a>
                          </div>
                          <div id="collapse01022028" class="accordion-body collapse">
                            <div class="accordion-inner">							                                
                                        <div>                              
                                          </div>
                                          <table class="table table-striped table-bordered table-hover" style="font-size:10px">
                                           <tr>
                                            <th>No</th>
											<th>Nama Benefit</th>
                                            <th>Tgl Jatuh Tempo</th>
                                            <th>Tgl Pengajuan</th>
                                            <th>Tgl Pembayaran</th>
                                            <th>Nilai Klaim</th>
                                            <th>Potongan</th>
                                            <th>Nilai Dibayarkan</th>
                                            <th>Cara Bayar</th>
                                            <th>Penerima</th>
                                            <th>Bukti Setor</th>
                                           </tr>
                              <tr>
                                <td>1</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/01/2028</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
							<tr>
                                <td>2</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/02/2028</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
							<tr>
                                <td>3</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/03/2028</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
							  <tr>
                              <td>4</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/04/2028</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
							  <tr>
                                <td>5</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/05/2028</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
							<tr>
                                <td>6</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/06/2028</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
							<tr>
                                <td>7</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/07/2028</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr> 
							<tr>
                                <td>8</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/08/2028</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>  
							<tr>
                                <td>9</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/09/2028</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>
							<tr>
                                <td>10</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/10/2028</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>  
							<tr>
                                <td>11</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/11/2028</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>  
							<tr>
                                <td>12</td>
								<td>Beasiswa Bulanan</td>
                                <td>01/12/2028</td>
                                <td></td>
                                <td></td>
                                <td>8.333.333</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                              </tr>  							  
                              </table>   
							</div>
						  </div>
						</div>
                        <!-- end accordion 16 -->

						</div>
					  </div>
                      <!-- cashflow benefit -->
                      
                      <!-- cashflow premi -->
                      <div class="tab-pane fade in active" id="cashflow_premi">
						<h5>Cara Bayar Premi = Bulanan </h5>
                        <h5>Mulai Pembayaran Premi = 01/02/2004</h5>
                        <h5>Akhir Pembayaran Premi = 01/02/2026</h5>
                        <h5>Pelunasan Premi Terakhir = 01/02/2014</h5>                        
                        <div class="span6" style="border:1px solid #bbb;border-radius:10px;padding:10px 20px 10px 20px;margin-left:0px;margin-bottom:10px">	                      		
                            <legend>Tagihan Premi & Pelunasan Premi</legend>
                            <label>Total Tagihan s.d tgl 01/04/2014</label>
                        	<div class="input-prepend input-append">                            	
								<span class="add-on">Rp</span>
								<input class="span2" id="appendedPrependedInput" type="text" value="30.000.000" style="text-align:right">
								<span class="add-on">,00</span>
							</div>
                            <label>Total Pelunasan s.d tgl 01/04/2014</label>
                            <div class="input-prepend input-append">                            	
								<span class="add-on">Rp</span>
								<input class="span2" id="appendedPrependedInput" type="text"  value="30.000.000" style="text-align:right">
								<span class="add-on">,00</span>
							</div>
                            <label>Tunggakan Premi</label>
                            <div class="input-prepend input-append">                            	
								<span class="add-on">Rp</span>
								<input class="span2" id="appendedPrependedInput" type="text"  value="0" style="text-align:right">
								<span class="add-on">,00</span>
							</div>
                        </div>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
						<!-- div group accordion -->                        
                        <div class="accordion" id="accordion4">                        
                        <!-- accordion cashflow_premi-->
						<?php
						$sqlx = "SELECT DISTINCT DATE_FORMAT(TGL_BOOKED,'%Y') tgl_booked
								 FROM pelunasan_premi
								 WHERE ID_KLIEN	= '1'
								 AND tgl_booked < CURDATE()
								 ORDER BY tgl_booked DESC";
						//echo $sqlx;	
						$z=1;	
						$resultx = mysql_query($sqlx);
						while($rowx = mysql_fetch_array($resultx)){
						?>
							<!-- accordion 11-->
							<div class="accordion-group">
							  <div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapse<?=$rowx['tgl_booked'];?>">
								  Tagihan Premi Tahun <?=$rowx['tgl_booked'];?> (Lunas)
								</a>
							  </div>
							  <div id="collapse<?=$rowx['tgl_booked'];?>" class="accordion-body collapse <?php if($z==1){echo 'in';}?>">
								<div class="accordion-inner">							                                
								<div>
								  <blockquote>
								  <p>Tagihan dan Pelunasan Premi Tahun <?=$rowx['tgl_booked'];?></p>
								  </blockquote>	
								</div>
								  <table class="table table-striped table-bordered table-hover">
								   <tr>
									<th>No</th>
									<th>Tgl Booked</th>
									<th>Tgl Pelunasan</th>
									<th>Cara Bayar</th>
									<th>Penyetor</th>
									<th>Bukti Setor</th>
								   </tr>
								  <?php
								  $sql = "SELECT a.*,(SELECT jenis_bayar FROM jenis_bayar WHERE kd_jenis_bayar = a.kd_jenis_bayar) jenis_bayar
										  FROM pelunasan_premi a
										  WHERE ID_KLIEN	= '1'
										  AND DATE_FORMAT(TGL_BOOKED,'%Y') = '".$rowx['tgl_booked']."'ORDER BY tgl_booked DESC";
									//echo $sqlx;		
								  $result = mysql_query($sql);
								  $i = 1;
								  while($row = mysql_fetch_array($result)){
								  ?>		   
								   <tr>
									<td><?=$i++;?></td>
									<td><?=$row['tgl_booked'];?></td>
									<td><?=$row['tgl_lunas'];?></td>
									<td><?=$row['jenis_bayar'];?></td>
									<td><?=$row['penyetor'];?></td>
									<td><?=$row['bukti_setor'];?></td>
								   </tr>
								   <?php
								   }
								   ?>													 
								  </table>   
								</div>
							  </div>
							</div>
							<!-- end accordion 11 -->
						<?php
						$z++;
						}
						?>							
                        <!-- end accordion cashflow_premi -->
                    	</div>	
                        <!-- end div group accordion -->
					  </div>
                      <!-- cashflow premi -->
                      <!-- kondisi -->
                      <div class="tab-pane fade" id="kondisi">
    					<div class="span6" style="border:1px solid #bbb;border-radius:10px;padding:10px 20px 10px 20px;margin-left:0px;margin-bottom:10px">	                      		
                            <legend>Jaminan Uang Asuransi dan Premi</legend>
                            <label>Jaminan Uang Asuransi</label>
                        	<div class="input-prepend input-append">                            	
								<span class="add-on">Rp</span>
								<input class="span2" id="appendedPrependedInput" type="text" value="<?=$nilai_meninggal;?>" style="text-align:right">
								<span class="add-on">,00</span>
							</div>
                            <label>Premi</label>
                            <div class="input-prepend input-append">                            	
								<span class="add-on">Rp</span>
								<input class="span2" id="appendedPrependedInput" type="text"  value="<?=$nilai_premi;?>" style="text-align:right">
								<span class="add-on">,00</span>
							</div>
                            <label>Nilai Tunai s.d. Tgl 01/02/2014</label>
                            <div class="input-prepend input-append">                            	
								<span class="add-on">Rp</span>
								<input class="span2" id="appendedPrependedInput" type="text"  value="<?=$nilai_berhenti;?>" style="text-align:right">
								<span class="add-on">,00</span>
							</div>
                        </div>    
						<div class="span6" style="margin:0 0 0 0px;width:690px">					
						<div class="accordion" id="accordion3">
						<!-- awal new -->
						<?php
						$sqlx = "SELECT * FROM produk_skema A,skema B WHERE A.kd_produk = 'JSPE' AND A.KD_skema = B.KD_skema";
						//echo $sqlx;		
						$resultx = mysql_query($sqlx);
						$i = 1;
						$kd_produk_skema = $rowx['kd_produk_skema'];
						while($rowx = mysql_fetch_array($resultx))
						{							
						$kd_produk_skema = $rowx['kd_produk_skema'];
						  ?>
						<div class="accordion-group">
						  <div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapse<?=$i;?>">
							  <?=$rowx['nama_skema'];?>
							</a>
						  </div>
						  <?php
						  if($i==1){
						  ?>
							<div id="collapse<?=$i;?>" class="accordion-body collapse in">
						  <?php
						  }
						  else{
						  ?>
							<div id="collapse<?=$i;?>" class="accordion-body collapse">
						  <?php
						  }
						  ?>
							<div class="accordion-inner">							                                
                            <div>
                              <blockquote>
                              <p>Manfaat yang dibayar sebagai berikut :</p>
                              </blockquote>	
                              </div>  
							  <?php
								$sql = "SELECT *,substr(a.kd_produk_skema,length(a.kd_produk_skema)-2,3) jenis_klaim,(select nama_jenis_klaim from jenis_klaim where kd_jenis_klaim = substr(a.kd_produk_skema,length(a.kd_produk_skema)-2,3)) nama_klaim
										FROM produk_skema_klaim_benefit A,BENEFIT B,cara_bayar c,frekuensi_bayar d
										WHERE kd_produk_skema in (SELECT kd_produk_skema_klaim 
																	   FROM produk_skema_klaim 
																	   WHERE kd_produk_skema = '$kd_produk_skema')
										AND A.KD_BENEFIT = B.KD_BENEFIT
										and a.kd_cara_bayar = c.kd_cara_bayar
										and a.kd_frekuensi_bayar = d.kd_frekuensi_bayar";
								//echo $sql;		
								$result = mysql_query($sql);
								while($row = mysql_fetch_array($result))
								{
									if ($row['kd_benefit']=='BSW'){	
									?>								
									  <label>Dibayarkan <?=$row['nama_cara_bayar'];?> <?=$row['nama_frekuensi_bayar'];?> Uang Asuransi mulai Tgl <?=$tgl_expirasi;?> s.d. Tgl <?=$tgl_akhir_masa;?></label>
									   <div class="input-prepend input-append">                            	
										<span class="add-on">Rp</span>
										<input class="span2" id="appendedPrependedInput" type="text"  value="<?=$nilai_beasiswa;?>" style="text-align:right">
										<span class="add-on">,00</span>
									   </div>
									<?php
									}
									else{
									//echo 'kd_benefit '.$row['kd_benefit'].' jenis_klaim '.$row['jenis_klaim'];
									?>
									  <label>Dibayarkan <?=$row['nama_cara_bayar'];?> <?=$row['nama_benefit'];?> 
											   saat <?=$row['nama_klaim'];?> 
											   <?php
											    if ($row['jenis_klaim']=='EXP'){
												echo ' pada Tgl '.$tgl_expirasi;
											   }
											   else if ($row['jenis_klaim']=='BHT'){
												echo ' pada Tgl '.$tgl_berhenti;
											   }
											   ?>
										</label>
									   <div class="input-prepend input-append">                            	
										<span class="add-on">Rp</span>
										<input class="span2" id="appendedPrependedInput" type="text"  
										 value="<?php
										   if ($row['jenis_klaim']=='EXP'){
											echo $nilai_expirasi;
										   }
										   else if ($row['jenis_klaim']=='BHT'){
											echo $nilai_berhenti;
										   }
										   else if (($row['jenis_klaim']=='MDK')&&($row['kd_benefit']=='NT')){
											echo $nilai_berhenti;
										   }
										   else if (($row['jenis_klaim']=='MDB')&&($row['kd_benefit']=='NT')){
											echo $nilai_berhenti;
										   }
										   else if ($row['jenis_klaim']=='MDK'){
											echo $nilai_meninggal_kecelakaan;
										   }
										   else if ($row['jenis_klaim']=='MDB'){
											echo $nilai_meninggal;
										   }
										   else if ($row['jenis_klaim']=='CCK'){
											echo $nilai_cacat;
										   }
										   
										?>" 
										 style="text-align:right">
										<span class="add-on">,00</span>
									   </div> 								  
							   <?php											  
									}
								}		
								?>
							</div>
						  </div>
						</div>
						<?php
						$i++;
						}			
						?>
						<!-- akhir new -->
					    </div>
					  
				</div><!-- span6 container -->
					  </div>					  
					</div>       
							
				</div><!-- kontainer kolom -->
						</div>
						<div class="tab-pane" id="A2">
						  <p>Howdy, I'm in Section B.</p>
						</div>
						<div class="tab-pane" id="A3">
						  <p>What up girl, this is Section C.</p>
						</div>
						<div class="tab-pane" id="A4">
						  <p>What up girl, this is Section D.</p>
						</div>
					  </div>
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