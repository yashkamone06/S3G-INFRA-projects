<?php
session_start();
if(!isset($_SESSION['AdminLoginId']))
{
	header("location: Admin Login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Panel </title>
</head>
<frameset cols="14%, *" noresize border="0">
<frame src="left_frame.php" name="left">
 <frame src="right_frame.php" name="right">
</frameset>
</html>