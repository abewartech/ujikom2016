<?php
include "koneksi.php";
if ($_SESSION['Type_User'] == "Admin") {
	$_SESSION['isLoggedIn']=1;
		header('location:index1.php');
}
else if ($_SESSION['Type_User'] == "Karyawan") {
	$_SESSION['isLoggedIn']=2;
		header ('location:index2.php');
}
?> 