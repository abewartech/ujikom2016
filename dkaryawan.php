<?php
include "koneksi.php";
	$Username=$_GET['Username'];
	$del=mysql_query("DELETE FROM `rentalmobil_32`.`tb_karyawan` WHERE `tb_karyawan`.`Username`='$Username'");
	
	if($del){
		echo "<script> alert ('Data Sukses Dihapus');
		location='vkaryawan.php';
		</script>";
		}
		else{
			echo "<script> alert ('Data Gagal Dihapus');
		location='vkaryawan.php';
		</script>";
		}
?>
