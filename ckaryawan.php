<?php
include('koneksi.php');
 
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$NIK = $_POST['NIK'];
$Nama_Karyawan = $_POST['Nama_Karyawan'];
$Alamat_Karyawan = $_POST['Alamat_Karyawan'];
$Telp_Karyawan = $_POST['Telp_Karyawan'];
$Type_User = $_POST['Type_User'];

 
$query = mysql_query("insert into tb_karyawan values( '$Username', '$Password', '$NIK', '$Nama_Karyawan', '$Alamat_Karyawan', '$Telp_Karyawan', '$Type_User')") or die(mysql_error());
$query = "select max(Id_User) as last_id from login limit 1";
$hasil = mysql_query($query);
$row = mysql_fetch_array($hasil);
$lastId = $row['last_id'];
$query = mysql_query("insert into tb_login values( '$Username', '$Password', '$Type_User')") or die(mysql_error());

if ($query) {
    header('location:ikaryawan.php?message=success');
	
}
?>
