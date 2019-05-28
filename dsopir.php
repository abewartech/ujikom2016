<?php
include "koneksi.php";
	$IdSopir=$_GET['IdSopir'];
	$del=mysql_query("DELETE FROM `rentalmobil_32`.`sopir` WHERE `sopir`.`IdSopir`='$IdSopir'");
	
	if($del){
		echo "<script> alert ('Data Sukses Dihapus');
		location='vsopir.php';
		</script>";
		}
		else{
			echo "<script> alert ('Data Gagal Dihapus');
		location='vsopir.php';
		</script>";
		}
?>
