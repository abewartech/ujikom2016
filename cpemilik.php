<?php
include('koneksi.php');
 
$Kode_Pemilik = $_POST['Kode_Pemilik'];
$Nama_Pemilik = $_POST['Nama_Pemilik'];
$Alamat_Pemilik = $_POST['Alamat_Pemilik'];
$Telp_Pemilik = $_POST['Telp_Pemilik'];

 
$query = mysql_query("insert into tb_pemilik values( '$Kode_Pemilik', '$Nama_Pemilik', '$Alamat_Pemilik', '$Telp_Pemilik')") or die(mysql_error());
 
if ($query) {
    header('location:ipemilik.php?message=success');
	
}
?>