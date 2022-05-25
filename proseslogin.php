<?php
include ("conn.php");
date_default_timezone_set('Asia/Jakarta');

session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

if (empty($username) && empty($password)) {
	header('location:login.html?error1');
	break;
} else if (empty($username)) {
	header('location:login.html?error=2');
	break;
} else if (empty($password)) {
	header('location:login.html?error=3');
	break;
}

$q = mysql_query("select * from admin where username='$username' and password='$password'");
$row = mysql_fetch_array ($q);
$level=$row['level'];
if (mysql_num_rows($q) == 1) {
    $_SESSION['user_id'] = $row['user_id'];
	$_SESSION['username'] = $username;
	$_SESSION['fullname'] = $row['fullname'];
    $_SESSION['gambar'] = $row['gambar'];
	$_SESSION['level'] = $level;
	
	if ($level=='admin'){ 
			echo "<script>alert('Anda berhasil Log In. Sebagai : $level');</script>";
			echo "<meta http-equiv='refresh' content='0; url=admin/index.php'>";}
	else {
			echo "<script>alert('Anda berhasil Log In. Sebagai : $level');</script>";
			echo "<meta http-equiv='refresh' content='0; url=guest/index.php'>";}
} else {
	header('location:login.html?error=4');
}
?>