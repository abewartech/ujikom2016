<?php
include('koneksi.php');
 
$Id_Pelanggan = $_POST['Id_Pelanggan'];
$No_KTP = $_POST['No_KTP'];
$Nama_Pelanggan = $_POST['Nama_Pelanggan'];
$Alamat_Pelanggan = $_POST['Alamat_Pelanggan'];
$Telp_Pelanggan = $_POST['Telp_Pelanggan'];

 
$query = mysql_query("insert into tb_pelanggan values( '$Id_Pelanggan', '$No_KTP', '$Nama_Pelanggan', '$Alamat_Pelanggan', '$Telp_Pelanggan')") or die(mysql_error());
 
if ($query) {
    header('location:ipelanggan.php?message=success');
	
}
?>