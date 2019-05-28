<!DOCTYPE html>
<?php
ob_start();
session_start();
error_reporting(0);
include "koneksi.php";
$No_Plat = $_GET['No_Plat'];
$query = "select * from tb_kendaraan where No_Plat='$No_Plat'";
$result =  mysql_query($query) or die("gagal melakukan query");
     $buff = mysql_fetch_array($result);
                 mysql_close();
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
<center><p>Update Data Kendaraan</p><table class="table1">
<form action="ukendaraan.php" method="POST" name="input">
<tr>
<td>Plat Nomer : <input type="text" name="No_Plat" placeholder="Plat Nomer" value="<?php echo $buff['No_Plat']; ?>"><br></td>
</tr>
<tr>
<td>Nama Type : <input type="text" name="Nama_Type" placeholder="Nama Type" value="<?php echo $buff['Nama_Type']; ?>"><br></td>
</tr>
<tr>
<td>Nama Merk : <input type="text" name="Nama_Merk" placeholder="Nama Merk" value="<?php echo $buff['Nama_Merk']; ?>"><br></td>
</tr>
<tr>
<td>Tahun : <input type="text" name="Tahun" placeholder="Tahun" value="<?php echo $buff['Tahun']; ?>"><br></td>
</tr>
<tr>
<td>Tarif Per Jam : <input type="text" name="Tarif_Per_Jam" placeholder="Tarif Per Jam" value="<?php echo $buff['Tarif_Per_Jam']; ?>"><br></td>
</tr>
<tr>
<td>Status Rental : <input type="text" name="Status_Rental" placeholder="Status Rental" value="<?php echo $buff['Status_Rental']; ?>"><br></td>
</tr>
<tr>
<td><center><input type="submit" name="input" value="Update" class="submit"></center><td>
</tr>
</form>
</table></center>
</div>
</div>
<div id="footer">
<center><p>Copyright &copy; Rahmad Al Habib 2016</p></center>
</div>
</body>
</html>