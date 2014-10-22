<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph.php');
require_once ('jpgraph_pie.php');
 
$data = array(40,60,21,33);

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
 
$graph = new PieGraph(500,500);
$graph->SetShadow();
 
$graph->title->Set("A simple Pie plot");
$graph->title->SetFont(FF_FONT1,FS_BOLD);
 
$p1 = new PiePlot($ydata);
$p1->SetLegends($datax);
$p1->SetCenter(0.4);
 
$graph->Add($p1);
$graph->Stroke();
 
?>