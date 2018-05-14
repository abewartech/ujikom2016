<?php

session_start();
session_destroy();
	echo '<script language="javascript">
	alert("Terima Kasih, Anda Berhasil Logout");
	window.location="index.php";
	</script>';

?>