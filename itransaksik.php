<!DOCTYPE html>
<?php
ob_start();
session_start();
error_reporting(0);
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
<form action="csetoran.php" method="POST" name="input">
<center><table>
<p>Input Data Setoran</p>
<tr>
<td>Id Kembali</td><td>:</td><td><input type="text" name="Id_Kembali" placeholder="Id Kembali" class="box"></td>
</tr>
<tr>
<td>No Transaksi</td><td>:</td><td><input type="text" name="No_Transaksi" placeholder="No Transaksi" class="box"></td>
</tr>
<tr>
<td>Tgl Kembali Realisasi</td><td>:</td><td><input type="date" name="Tgl_Kembali_Realisasi" placeholder="Tgl Kembali Realisasi" class="box"></td>
</tr>
<tr>
<td>Jam Kembali Realisasi</td><td>:</td><td><input type="text" name="Jam_Kembali_Realisasi" placeholder="Jam Kembali Realisasi" class="box"></td>
</tr>
<tr>
<td>Denda</td><td>:</td><td><input type="text" name="Denda" placeholder="Denda" class="box"></td>
</tr>
<tr>
<td>KM Kembali</td><td>:</td><td><input type="text" name="KM_Kembali" placeholder="KM Kembali" class="box"></td>
</tr>
<tr>
<td>BBM Kembali</td><td>:</td><td><input type="text" name="BBM_Kembali" placeholder="BBM Kembali" class="box"></td>
</tr>
<tr>
<td>Kondisi Mobil Kembali</td><td>:</td><td><input type="text" name="Kondisi_Mobil_Kembali" placeholder="Kondisi Mobil Kembali" class="box"></td>
</tr>
<tr>
<td>Kerusakan</td><td>:</td><td><input type="text" name="Kerusakan" placeholder="Kerusakan" class="box"></td>
</tr>
<tr>
<td>Biaya Kerusakan</td><td>:</td><td><input type="text" name="Biaya_Kerusakan" placeholder="Biaya_Kerusakan" class="box"></td>
</tr>
<tr>
<td>Biaya BBM</td><td>:</td><td><input type="text" name="Biaya_BBM" placeholder="Biaya_BBM" class="box"></td>
</tr>
</table></center>
</form>
<input type="submit" name="input" value="input" class="submit">
</div>
</div>
<div id="footer">
<center><p>Copyright &copy; Rahmad Al Habib 2016</p></center>
</div>
</body>
</html>