<?php
session_start();
include "koneksi.php";
$Username = $_POST['Username'];
$Password = $_POST['Password'];

$query = "SELECT * FROM tb_login WHERE Username = '$Username' ";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);

if ($Password == $data['Password']) {

$_SESSION['Type_User'] = $data['Type_User'];
$_SESSION['Username'] = $data['Username'];
include "menu.php";
}

else {
	echo '<script language="javascript">
	alert("Username atau Password Yang anda Masukkan Salah");
	window.location="index.php";
	</script>';
	exit();
}
?> 