<?php
require_once ('jpgraph.php');
require_once ('jpgraph_line.php');

//koneksi ke database
$db_host = 'localhost';
$db_user = 'root';
$db_pwd = '';

$database = 'contohdata';
$table = 'pelajaran';

if (!mysql_connect($db_host, $db_user, $db_pwd))
die("Cant connect to database");

if (!mysql_select_db($database))
die("Cant select database");

// sending query
$query1="SELECT nama, nilai FROM {$table}";
$sqldata = mysql_query($query1);
if (!$sqldata) {
die("Query to show fields from table failed");
}

$ydata = array();
$datax = array();

while ($row_sqldata=mysql_fetch_array($sqldata)) {
$datax[]=$row_sqldata['nama'];
$ydata[]=$row_sqldata['nilai'];
}

// Create the graph. These two calls are always required
$graph = new Graph(1000,600);
$graph->SetScale("textlin");

$judul="Data nilai murid";
$graph->title->Set($judul);
$graph->xaxis->SetTickLabels($datax);
$graph->xaxis->SetLabelAngle($aAngle=90);
$graph->xaxis->SetLabelAlign($aHorAlign='center', $aVertAlign='top',$aParagraphAlign='left');
$graph->xaxis->title->Set("nama");
$graph->yaxis->title->Set("nilai");
$graph->legend->SetPos(0.5, 0.99, $aHAlign='center',$aVAlign='bottom');
$graph->legend->SetColumns(10);

// Create the linear plot
//if ($jumlah_axis <>0) {
$lineplot=new LinePlot($ydata);
$lineplot->SetColor('blue');
$lineplot->SetLegend('Nilai siswa');
//}

// Add the plot to the graph
$graph->Add($lineplot);

// Display the graph
$graph->Stroke();

?>