<?php
include "koneksi.php";
	$No_KTP=$_GET['No_KTP'];
	$del=mysql_query("DELETE FROM `rentalmobil_32`.`tb_pelanggan` WHERE `tb_pelanggan`.`No_KTP`='$No_KTP'");
	
	if($del){
		echo "<script> alert ('Data Sukses Dihapus');
		location='vpelanggan.php';
		</script>";
		}
		else{
			echo "<script> alert ('Data Gagal Dihapus');
		location='vpelanggan.php';
		</script>";
		}
?>
