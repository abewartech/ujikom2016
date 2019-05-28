<?php
include('koneksi.php');
 
$Id_Sopir = $_POST['Id_Sopir'];
$Nama_Sopir = $_POST['Nama_Sopir'];
$Alamat_Sopir = $_POST['Alamat_Sopir'];
$Telp_Sopir = $_POST['Telp_Sopir'];
$No_SIM = $_POST['No_SIM'];
$Tarif_Per_Jam = $_POST['Tarif_Per_Jam'];

 
$query = mysql_query("insert into sopir values( '$Id_Sopir', '$Nama_Sopir', '$Alamat_Sopir', '$Telp_Sopir', '$No_SIM', '$Tarif_Per_Jam')") or die(mysql_error());
 
if ($query) {
    header('location:isopir.php?message=success');
	
}
?>