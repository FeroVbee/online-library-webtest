<?php
mysql_connect("localhost","root","");
mysql_select_db("project");

//fungsi format rupiah 
/**function format_rupiah($rp) {
	$hasil = "Rp." . number_format($rp, 0, "", ".") . ",00";
	return $hasil;
    }**/
$denda1=1000;
?>