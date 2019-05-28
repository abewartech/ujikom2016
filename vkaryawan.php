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
<script type="text/javascript" src="style/jquery/datatables/media/js/jquery.js"></script>
<script type="text/javascript" src="style/jquery/datatables/media/js/jquery.dataTables.min.js"></script>
<link href="style/jquery/datatables/media/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
 $(document).ready(function() {
    $('#belajar').dataTable({oLanguage:{sLengthMenu:"Show <select>"+"<option value='5'>5</option>"+"</select> entries"},"iDisplayLength":5});
 } );
</script>
</head>
<body>
<body background="style/img/back01.png">
<div id="header">
<img src="style/img/banner_rahmad.jpg" class="banner" href="index.php">
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
<div id="dataTables">
<table border="1" align="center" id="belajar" width="1015px" class="display">
<caption>Data Karyawan</caption>
<thead>
                        <tr>
                          	<th width="15%">Username</th>
                            <th>Password</th>
							<th>NIK</th>
							<th>Nama_Karyawan</th>
							<th>Alamat_Karyawan</th>
							<th>Telp_Karyawan</th>
							<th>Option</th>
                        </tr>
                    </thead>
					<tbody>
					<?php
	include'koneksi.php';
    $query = mysql_query("select * from tb_karyawan");
 
    $no = 0;
    while ($r = mysql_fetch_array($query)){	
    echo"<tr>
            <td>$r[Username]</td>
            <td>$r[Password]</td>
			<td>$r[NIK]</td>
            <td>$r[Nama_Karyawan]</td>
			<td>$r[Alamat_Karyawan]</td>
            <td>$r[Telp_Karyawan]</td>
			<td><a href='dkaryawan.php?Username=".$r['Username']."' class='delete'>Hapus |<a/>
			<a href='ekaryawan.php?Username=".$r['Username']."' class='delete'>Edit<a/>
			</td>
        </tr>";
		$no++;	
	}
    ?>
</tbody>
</table>
</div>
</div>
<div id="footer">
<center><p>Copyright &copy; Rahmad Al Habib 2016</p></center>
</div>
</body>
</html>