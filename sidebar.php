<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/css/style.css" type="text/css">
<link href="style/jquery/jqClock/jqClock.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="style/jquery/datatables/media/js/jquery.js"></script>
<script type="text/javascript" src="style/jquery/jqClock/jqClock.min.js"></script>
<script type="text/javascript" src="style/jquery/datatables/media/js/jquery.dataTables.min.js"></script>
<link href="style/jquery/datatables/media/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
$(document).ready(function(){
$("#clock1").clock();
});
</script>
</head>
<body>
		<?php
		if (empty($_SESSION[Username])) {
		?>
		<br>
		<div id="formlogin">
			<div id="judul">
              <center><label>Form Login</label></center>
			</div>
				<form action="login.php" method="post" name="form1"><br>
				<tr>
				  <td>Username </td>
				  <td><input name="Username" type="text" id="username" required></td>
				</tr>
				<tr>
				  <td>Password</td>
				  <td><input name="Password" type="password" id="password" required></td>
				</tr>
				<tr>
				  <p><td><input type="submit" name="Submit" value="Login" class="button">
				  <input type="reset" name="Submit2" value="Reset" class="button"></td></p>
				</tr>
				</form>
		</div>
</br>
		<?php }?>
		<?php
			if (!empty($_SESSION[Username])) {
		  ?>
		<br>
		<div id="formlogin">
			<div id="judul">
              <center><label>Menu User</label></center>
			</div></br>
			<img src="style/img/people.png" width="57" height="56">
			<ul>
				<li>Welcome	:	<?php echo "$_SESSION[Username]"; ?></li>
				<li><a href="#">My Profil</a></li>
		<?php
			$cek=mysql_num_rows(mysql_query("SELECT Username FROM login WHERE Username='$_SESSION[Username]'"));
			if ($cek > 0) {
				echo "tes";
			}
		?>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
<br/>
		<?php } ?>
<div id="clock1"></div>
</body>
</html>