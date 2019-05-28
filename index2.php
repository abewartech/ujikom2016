<!DOCTYPE html>
<?php
ob_start();
session_start();
error_reporting(0);
include 'koneksi.php';
$Username = $_SESSION['Username'];
$isLoggedIn = $_SESSION['isLoggedIn'];
//proteksi akses dari URL langsung 
if($isLoggedIn != '2'){
    session_destroy();
    header('Location: index.php');
}
?>
<html>
<head><title>Rental Mobil
</title>
<link rel="stylesheet" href="style/css/style.css" type="text/css">
</head>
<body>
<body background="style/img/back01.png">
<div id="header">
<img src="style/img/banner_rahmad.jpg" class="banner" >
</div>
<div id='cssmenu'>
<ul>
   <li><a href='index2.php'>Home</a></li>
   <li class='active has-sub'><a href='#'>Input Data</a>
   <ul>
   <li class='has-sub'><a href='ikendaraan.php'>Data Kendaraan</a></li>
   <li class='has-sub'><a href='ipelanggan.php'>Data Pelanggan</a></li>
   <li class='has-sub'><a href='itransaksip.php'>Data Transaksi Pinjam</a></li>
   <li class='has-sub'><a href='itransaksik.php'>Data Transaksi Kembali</a></li>
   <li class='has-sub'><a href='isopir.php'>Data Sopir</a></li>
   <li class='has-sub'><a href='ipemilik.php'>Data Pemilik</a></li>
   <li class='has-sub'><a href='iservice.php'>Data Service</a></li>
   <li class='has-sub'><a href='isetoran.php'>Data Setoran</a></li>
   <li class='has-sub'><a href='ikaryawan.php'>Data Karyawan</a></li>
   </ul>
   </li>
   <li class='active has-sub'><a href='#'>Lihat Data</a>
   <ul>
   <li class='has-sub'><a href='vkendaraan.php'>Data Kendaraan</a></li>
   <li class='has-sub'><a href='vpelanggan.php'>Data Pelanggan</a></li>
   <li class='has-sub'><a href='vtransaksip.php'>Data Transaksi Pinjam</a></li>
   <li class='has-sub'><a href='vtransaksik.php'>Data Transaksi kembali</a></li>
   <li class='has-sub'><a href='vsopir.php'>Data Sopir</a></li>
   <li class='has-sub'><a href='vpemilik.php'>Data Pemilik</a></li>
   <li class='has-sub'><a href='vservice.php'>Data Service</a></li>
   <li class='has-sub'><a href='vsetoran.php'>Data Setoran</a></li>
   <li class='has-sub'><a href='vkaryawan.php'>Data Karyawan</a></li>
   </ul>
   </li>
   <li><a href='index2.php'>Kontak</a></li>
   <li><a href='index2.php'>About</a></li>
</ul>
</div>
<div id="leftbar">
<?php include "sidebar.php";?>
</div>
<div id="isi">
</div>
<div id="footer">
<center><p>Copyright &copy; Rahmad Al Habib 2016</p></center>
</div>
</body>
</html>