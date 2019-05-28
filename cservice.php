<?php
include('koneksi.php');
 
$Kode_Service = $_POST['Kode_Service'];
$No_Plat = $_POST['No_Plat'];
$Id_Jenis_Service = $_POST['Id_Jenis_Service'];
$Nama_Jenis_Service = $_POST['Nama_Jenis_Service'];
$Tgl_Service = $_POST['Tgl_Service'];
$Biaya_Service = $_POST['Biaya_Service'];

 
$query = mysql_query("insert into tb_service values( '$Kode_Service', '$No_Plat', '$Id_Jenis_Service', '$Nama_Jenis_Service', '$Tgl_Service', '$Biaya_Service')") or die(mysql_error());
 
if ($query) {
    header('location:iservice.php?message=success');
	
}
?>