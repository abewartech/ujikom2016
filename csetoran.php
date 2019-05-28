<?php
include('koneksi.php');
 
$No_Setoran = $_POST['No_Setoran'];
$Kode_Pemilik = $_POST['Kode_Pemilik'];
$Tgl_Setoran = $_POST['Tgl_Setoran'];
$Jumlah = $_POST['Jumlah'];

 
$query = mysql_query("insert into tb_setoran values( '$No_Setoran', '$Kode_Pemilik', '$Tgl_Setoran', '$Jumlah')") or die(mysql_error());
 
if ($query) {
    header('location:isetoran.php?message=success');
	
}
?>