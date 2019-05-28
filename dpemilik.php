<?php
include "koneksi.php";
	$KodePemilik=$_GET['KodePemilik'];
	$del=mysql_query("DELETE FROM `rentalmobil_32`.`pemilik` WHERE `pemilik`.`KodePemilik`='$KodePemilik'");
	
	if($del){
		echo "<script> alert ('Data Sukses Dihapus');
		location='vpemilik.php';
		</script>";
		}
		else{
			echo "<script> alert ('Data Gagal Dihapus');
		location='vpemilik.php';
		</script>";
		}
?>
