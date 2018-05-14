<?php
include "koneksi.php";

$qry=mysql_query("SELECT * FROM login WHERE Username='$_POST[Username]' AND Password='$_POST[Password]'");
$jumpa=mysql_num_rows($qry);
$r=mysql_fetch_array($qry);

if ($jumpa > 0) {
	session_start();
	$_SESSION[Username]= $r[Username];
	$_SESSION[Password]= $r[Password];
	$_SESSION[Username]= $r[Username];
	header('location:index1.php');
}
else {
	echo '<script language="javascript">
	alert("Username atau Password Yang anda Masukkan Salah");
	window.location="index.php";
	</script>';
	exit();
}
?>