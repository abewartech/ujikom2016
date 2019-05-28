<?php
include "koneksi.php";
	$No_Plat=$_GET['No_Plat'];
	$del=mysql_query("DELETE FROM `rentalmobil_32`.`tb_kendaraan` WHERE `tb_kendaraan`.`No_Plat`='$No_Plat'");
	
	if($del){
		echo "<script> alert ('Data Sukses Dihapus');
		location='vkendaraan.php';
		</script>";
		}
		else{
			echo "<script> alert ('Data Gagal Dihapus');
		location='vkendaraan.php';
		</script>";
		}
?>
