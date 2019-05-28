<?php
include('koneksi.php');
 
$No_Plat = $_POST['No_Plat'];
$Nama_Type = $_POST['Nama_Type'];
$Nama_Merk = $_POST['Nama_Merk'];
$Tahun = $_POST['Tahun'];
$Tarif_Per_Jam = $_POST['Tarif_Per_Jam'];
$Status_Rental = $_POST['Status_Rental'];

 
$query = mysql_query("update tb_kendaraan set No_Plat='$No_Plat' , Nama_Type='$Nama_Type' , Nama_Merk='$Nama_Merk' , Tahun='$Tahun' , Tarif_Per_Jam='$Tarif_Per_Jam', Status_Rental='$Status_Rental' where No_Plat='$No_Plat'") or die(mysql_error());
 
if ($query) {
    header('location:vkendaraan.php?message=success');
	
}
?>