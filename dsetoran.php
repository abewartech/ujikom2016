<?php
include "koneksi.php";
	$NoSetoran=$_GET['NoSetoran'];
	$del=mysql_query("DELETE FROM `rentalmobil_32`.`setoran` WHERE `setoran`.`NoSetoran`='$NoSetoran'");
	
	if($del){
		echo "<script> alert ('Data Sukses Dihapus');
		location='vsetoran.php';
		</script>";
		}
		else{
			echo "<script> alert ('Data Gagal Dihapus');
		location='vsetoran.php';
		</script>";
		}
?>