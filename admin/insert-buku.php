<?php
include "../conn.php";
$id          = $_POST['id'];
$judul       = $_POST['judul'];
$pengarang	 = $_POST['pengarang'];
$th_terbit 	 = $_POST['th_terbit'];
$penerbit 	 = $_POST['penerbit'];
$isbn 	     = $_POST['isbn'];
$kategori	 = $_POST['kategori'];
$jumlah_buku = $_POST['jumlah_buku'];
$lokasi		 = $_POST['lokasi'];
$asal		 = $_POST['asal'];
$tgl_input	 = $_POST['tgl_input'];
//if( empty($nama) || empty($jk) || empty($th_terbit) || empty($perlu) || empty($isbn) || empty($kategori) ){
    //echo "<b>Data Harus Di isi.!!!</b>";
//}else{

$query = mysql_query("INSERT INTO data_buku (id, judul, pengarang, th_terbit, penerbit, isbn, kategori, jumlah_buku, lokasi, asal, tgl_input) VALUES ('$id', '$judul', '$pengarang', '$th_terbit', '$penerbit', '$isbn', '$kategori', '$jumlah_buku', '$lokasi', '$asal', '$tgl_input')");
if ($query){
	echo "<script>alert('Berhasil Menambah Buku!'); window.location = 'input-buku.php'</script>";	
} else {
	echo "<script>alert('Gagal Menambah Buku!'); window.location = 'input-buku.php'</script>";	
}
//}
?>