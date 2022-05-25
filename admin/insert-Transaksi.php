<?php
include "../conn.php";

$tgl_pinjam		= isset($_POST['tgl_pinjam']) ? $_POST['tgl_pinjam'] : "";
$tgl_kembali	= isset($_POST['tgl_kembali']) ? $_POST['tgl_kembali'] : "";

$dapat_buku		= isset($_POST['judul_buku']) ? $_POST['judul_buku'] : "";
$pecah_buku		= explode (".", $dapat_buku);
$id				= $pecah_buku[0];
$buku			= $pecah_buku[1];

$dapat_mhs		= isset($_POST['nama_peminjam']) ? $_POST['nama_peminjam'] : "";
$pecah_mhs		= explode (".", $dapat_mhs);
$id_mhs 		= $pecah_mhs[0];
$mhs			= $pecah_mhs[1];

$ket			= isset($_POST['ket']) ? $_POST['ket'] : "";

if($buku == "") {
	echo "<script>alert('Pilih bukunya terlebih dahulu');</script>";
		echo "<meta http-equiv='refresh' content='0; url=trans_pinjam.php'>";
} elseif ($mhs == "" || $dapat_mhs == "") {
	echo "<script>alert('Pilih peminjamnya terlebih dahulu');</script>";
		echo "<meta http-equiv='refresh' content='0; url=trans_pinjam.php'>";
	
} else {
	$query=mysql_query("SELECT * FROM data_buku WHERE judul = '$buku'");
	while ($hasil=mysql_fetch_array($query)) {	
		$sisa=$hasil['jumlah_buku'];
	} 
		if ($sisa == 0) {
		echo "<script>alert('Stok bukunya telah habis, tidak bisa melakukan transaksi, tambahkan stok buku segera');</script>";
		echo "<meta http-equiv='refresh' content='0; url=trans_pinjam.php'>";
	
	} else {
		$qt = mysql_query("INSERT INTO trans_pinjam VALUES (null, '$buku', '$mhs', '$tgl_pinjam', '$tgl_kembali', 'Pinjam', '$ket')") or die ("Gagal Masuk".mysql_error());
		$qu			= mysql_query("UPDATE data_buku SET jumlah_buku=(jumlah_buku-1) WHERE id=$id ");		
		if ($qt&&$qu) {
	        echo "<script>alert('Transaksi Sukses');</script>";
	        	echo "<meta http-equiv='refresh' content='0; url=trans_pinjam.php'>";
		} else {
			echo "<script>alert('Transaksi Gagal');</script>";
				echo "<meta http-equiv='refresh' content='0; url=trans_pinjam.php'>";
	
		}
	}
}
?>
