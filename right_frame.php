<?php
session_start();
if(!isset($_SESSION['AdminLoginId']))
{
	header("location: Admin Login.php");
}
?>
<html>
<head>
<title></title>
<style>
	a
	{
		color:white;
		text-decoration:none;
		font-size:25px;
	}
	</style>
</head>
<body>
<table bgcolor="black" width="100%" height="100" >
<tr>
<td align="center"><font color="white"><h1><b>Welcome to Admin Panel : <?php echo $_SESSION['AdminLoginId'];?></font></</b></h1></td>
<td><form method="POST">
								<button name="Logout">LOG OUT</button>
								</form>

								<?php
									if(isset($_POST['Logout']))
									{
										session_destroy();
										header("location: Admin Login.php");
									}
								?>
								</td>
</tr>
</table>
<br><br><br>
<table width="75%" border="0" height="200" cellspacing="20">
<tr>
<td width="25%" bgcolor="red" rowspan="2"><center><a target="right">GALLERY</a></center></td>
<td width="25%" bgcolor="red" rowspan="2"><center><a target="right">BLOG</a></center></td>
<td width="25%" bgcolor="green"><center><a href="change_passwoard.php" target="right">Change Passwoard</a></center></td>
</tr>
<tr>
<td bgcolor="orange"><center><a href="logout.php">Logout</a></center></td>
</tr>
</table>
</body>
</html>