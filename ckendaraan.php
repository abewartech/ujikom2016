<?php
include('koneksi.php');
 
$No_Plat = $_POST['No_Plat'];
$Nama_Type = $_POST['Nama_Type'];
$Nama_Merk = $_POST['Nama_Merk'];
$Kode_Pemilik = $_POST['Kode_Pemilik'];
$Tahun = $_POST['Tahun'];
$Tarif_Per_Jam = $_POST['Tarif_Per_Jam'];
$Status_Rental = $_POST['Status_Rental'];

 
$query = mysql_query("insert into tb_kendaraan values( '$No_Plat', '$Nama_Type', '$Nama_Merk', '$Kode_Pemilik', '$Tahun', '$Tarif_Per_Jam', '$Status_Rental')") or die(mysql_error());
 
if ($query) {
    header('location:ikendaraan.php?message=success');
	
}
?>