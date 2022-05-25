<?php
include "../conn.php";
$id = $_GET['id'];
$judul_buku = $_GET['judul_buku'];
$tgl_kembali = $_GET['tgl_kembali'];
$lambat = $_GET['lambat'];


if($lambat > 7) {
	echo "<script>alert('Buku yang dipinjam tidak dapat diperpanjang, karena sudah terlambat lebih dari 7 hari. Kembalikan dahulu, kemudian pinjam kembali !');</script>";
	echo "<meta http-equiv='refresh' content='0; url=trans_pinjam.php'>";
	
	} else {
	include "../conn.php"; 

	$pecah			= explode("-",$tgl_kembali);
	$next_7_hari	= mktime(0,0,0,$pecah[1],$pecah[0]+7,$pecah[2]);
	$hari_next		= date("d-m-Y", $next_7_hari);


	$update_tgl_kembali=mysql_query("UPDATE trans_pinjam SET tgl_kembali='$hari_next' WHERE id='$id'");

	if ($update_tgl_kembali) {
		echo "<script>alert('Berhasil Diperpanjang');</script>";
		echo "<meta http-equiv='refresh' content='0; url=trans_pinjam.php'>";
	} else {
		echo "<script>alert('Gagal Diperpanjang');</script>";
		echo "<meta http-equiv='refresh' content='0; url=trans_pinjam.php'>";
	}
}
?>