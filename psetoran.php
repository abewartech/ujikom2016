<!DOCTYPE html>
<?php
	include'koneksi.php';
    $query = mysql_query("select * from tb_setoran");
?>

<?php
$hari_ini = date("d-m-Y");
?>

<html>
<head>
<title>Laporan</title>
</head>
<body>
<h2><center>Laporan Data Setoran</center></h2>
<center>Tanggal :&nbsp;<?php echo $hari_ini; ?> </center><br>
<table align="center" border="1" cellpadding="5" cellspacing="0">
	<thead>
		<tr>
        <tr><td>No Setoran</td>
		    <td>Kode Pemilik</td>
			<td>Tgl Setoran</td>
			<td>Jumlah</td>
	    </tr>
	</thead>
	<tbody>
<?php
$no=0;
while ($hasil=mysql_fetch_array($query)) {
$no++;
echo "<tr>
      <td>$hasil[No_Setoran]</td>
	  <td>$hasil[Kode_Pemilik]</td>
	  <td>$hasil[Tgl_Setoran]</td>
	  <td>$hasil[Jumlah]</td>";

}
?>
</tbody>
</table>
<center>________________________________________________________________________________</center>
<h4><center>RAHMAD TRANSPORT</center></h4>
</body>
</html>
<script>
window.print();
</script>