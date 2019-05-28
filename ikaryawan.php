<!DOCTYPE html>
<?php
ob_start();
session_start();
error_reporting(0);
include 'koneksi.php';
$Username = $_SESSION['Username'];
$isLoggedIn = $_SESSION['isLoggedIn'];
//proteksi akses dari URL langsung 
if($isLoggedIn != '1'){
	session_destroy();
	echo '<script language="javascript">
	alert("Hanya Admin Yang Dapat Mengakses Halaman Ini, Silahkan Login Sebagai Admin");
	window.location="index.php";
	</script>';
	exit();
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
   <li><a href='index1.php'>Home</a></li>
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
   <li><a href='index1.php'>Kontak</a></li>
   <li><a href='index1.php'>About</a></li>
</ul>
</div>
<div id="leftbar">
<?php include "sidebar.php";?>
</div>
<div id="isi">
<div id="forminput">
<form action="ckaryawan.php" method="POST" name="input">
<center><table>
<p>Input Data Karyawan</p>
<tr>
<td>Username</td><td>:</td><td><input type="text" name="Username" placeholder="Username" class="box"></td>
</tr>
<tr>
<td>Password</td><td>:</td><td><input type="text" name="Password" placeholder="Password" class="box"></td>
</tr>
<tr>
<td>NIK</td><td>:</td><td><input type="text" name="NIK" placeholder="NIK" class="box"></td>
</tr>
<tr>
<td>Nama</td><td>:</td><td><input type="text" name="Nama_Karyawan" placeholder="Nama" class="box"></td>
</tr>
<tr>
<td>Alamat</td><td>:</td><td><input type="text" name="Alamat_Karyawan" placeholder="Alamat" class="box"></td>
</tr>
<tr>
<td>No Telepon</td><td>:</td><td><input type="text" name="Telp_Karyawan" placeholder="No Telepon" class="box"></td>
</tr>
<tr>
<td>Type User</td><td>:</td><td><input type="text" name="Type_User" placeholder="Type User" class="box"></td>
</tr>
</table></center>
<input type="submit" name="input" value="input" class="submit">
</form>
</div>
</div>
<div id="footer">
<center><p>Copyright &copy; Rahmad Al Habib 2016</p></center>
</div>
</body>
</html>