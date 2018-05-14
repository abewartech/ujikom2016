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
   <li><a href='index.php'>Home</a></li>
   <li class='active has-sub'><a href='#'>Input Data</a>
   <ul>
   <li class='has-sub'><a href='index.php'>Data Karyawan</a></li>
   <li class='has-sub'><a href='index.php'>Data Kendaraan</a></li>
   <li class='has-sub'><a href='index.php'>Data Pelanggan</a></li>
   <li class='has-sub'><a href='index.php'>Data Transaksi</a></li>
   <li class='has-sub'><a href='index.php'>Data Sopir</a></li>
   <li class='has-sub'><a href='index.php'>Data Pemilik</a></li>
   <li class='has-sub'><a href='index.php'>Data Service</a></li>
   <li class='has-sub'><a href='index.php'>Data Setoran</a></li>
   </ul>
   </li>
   <li class='active has-sub'><a href='#'>Lihat Data</a>
   <ul>
   <li class='has-sub'><a href='vkaryawan.php'>Data Karyawan</a></li>
   <li class='has-sub'><a href='vkendaraan.php'>Data Kendaraan</a></li>
   <li class='has-sub'><a href='vpelanggan.php'>Data Pelanggan</a></li>
   <li class='has-sub'><a href='vtransaksi.php'>Data Transaksi</a></li>
   <li class='has-sub'><a href='vsopir.php'>Data Sopir</a></li>
   <li class='has-sub'><a href='vpemilik.php'>Data Pemilik</a></li>
   <li class='has-sub'><a href='vservice.php'>Data Service</a></li>
   <li class='has-sub'><a href='vsetoran.php'>Data Setoran</a></li>
   </ul>
   </li>
   <li><a href='index.php'>Kontak</a></li>
   <li><a href='index.php'>About</a></li>
</ul>
</div>
<div id="leftbar">
<?php include "sidebar.php";?>
</div>
<div id="isi">
<div id="dataTables">
<table border="1" align="center" id="belajar" width="1015px">
<caption>Data Transaksi</caption>
<thead>
                        <tr>
                          	<th>No Transaksi</th>
                            <th>Tgl Pesan</th>
							<th>Tgl Pinjam</th>
							<th>Tgl Kembali Rencana</th>
                            <th>Jam Kembali Rencana</th>
							<th>Tgl Kembali Realisasi</th>
							<th>Jam Kembali Realisasi</th>
							<th>Denda</th>
							<th>Kilometer Pinjam</th>
							<th>Kilometer Kembali</th>
							<th>BBM Pinjam</th>
							<th>BBM Kembali</th>
							<th>Kondisi Mobil Pinjam</th>
							<th>Kondisi Mobil Kembali</th>
							<th>Kerusakan</th>
							<th>Biaya Kerusakan</th>
							<th>Biaya BBM</th>
                        </tr>
                    </thead>
					<tbody>
					<?php
	include'koneksi.php';
    $query = mysql_query("select * from transaksisewa");
 
    $no = 0;
    while ($r = mysql_fetch_array($query)){	
    echo"<tr>
            <td>$r[NoTransaksi]</td>
            <td>$r[TglPesan]</td>
			<td>$r[TglPinjam]</td>
            <td>$r[JamPinjam]</td>
			<td>$r[TglKembaliRencana]</td>
            <td>$r[JamKembaliRencana]</td>
			<td>$r[TglKembaliRealisasi]</td>
            <td>$r[JamKembaliRealisasi]</td>
			<td>$r[Denda]</td>
            <td>$r[KilometerPinjam]</td>
			<td>$r[KilometerKembali]</td>
            <td>$r[BBMpinjam]</td>
			<td>$r[BBMkembali]</td>
            <td>$r[KondisiMobilPinjam]</td>
			<td>$r[KondisiMobilKembali]</td>
            <td>$r[Kerusakan]</td>
			<td>$r[BiayaKerusakan]</td>
			<td>$r[BiayaBBM]</td>
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