<!DOCTYPE html>
<?php
ob_start();
session_start();
error_reporting(0);

?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head><title>Rental Mobil
</title>
<link rel="stylesheet" href="style/css/style.css" type="text/css">
</head>
<body>
<body background="style/img/back01.png"/>
<div id="header">
<img src="style/img/banner_rahmad.jpg" class="banner">
</div>
<div id='cssmenu'>
<ul>
   <li><a href='index.php'>Home</a></li>
   <li><a href='index.php'>Kontak</a></li>
   <li><a href='index.php'>About</a></li>
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