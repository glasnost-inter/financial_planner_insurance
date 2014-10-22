<?php
include ("jpgraph.php");
include ("jpgraph_pie.php");
 
// Some data
$data = array(50,15,25,10,31,20);

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

 
// A new graph
$graph = new PieGraph(400,420);
$graph->SetAntiAliasing();
 
$graph->title->SetFont(FF_ARIAL, FS_BOLD, 14);
$graph->title->Set('Using JpGraph Library');
$graph->title->SetMargin(10);
 
$graph->subtitle->SetFont(FF_ARIAL, FS_BOLD, 10);
$graph->subtitle->Set('(common objects)');
 
// The pie plot
$p1 = new PiePlot($ydata);
$p1->SetSliceColors(array('darkred','navy','lightblue','orange','gray','teal'));
 
// Move center of pie to the left to make better room
// for the legend
$p1->SetSize(0.3);
$p1->SetCenter(0.5,0.47);
$p1->value->Show();
$p1->value->SetFont(FF_ARIAL,FS_NORMAL,10);
 
// Legends

$p1->SetLegends(array("Salman (%1.1f%%)","Salman1 (%1.1f%%)","Farid (%1.1f%%)","Farid1 (%1.1f%%)",
"Sep (%1.1f%%)", "Oct (%1.1f%%)"));
$graph->legend->SetPos(0.5,0.97,'center','bottom');
$graph->legend->SetColumns(3);
 
$graph->Add($p1);
$graph->Stroke();
?>