<?php
include "koneksi.php";
	$KodeService=$_GET['KodeService'];
	$del=mysql_query("DELETE FROM `rentalmobil_32`.`service` WHERE `service`.`KodeService`='$KodeService'");
	
	if($del){
		echo "<script> alert ('Data Sukses Dihapus');
		location='vservice.php';
		</script>";
		}
		else{
			echo "<script> alert ('Data Gagal Dihapus');
		location='vservice.php';
		</script>";
		}
?>
