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
<title></title>
<style>
	p
	{
		color:gray;
	}
	table
	{
		color:gray;
	}
	.colorchange:hover
	{
		color:white;
	}
	a
	{
		text-decoration:none;
		color:grey;
	}
	a:hover
	{
		color:white;
	}
</style>
</head>
<body bgcolor="black">
<center><p class="colorchange"><font size="5"> OPERATION</font></p></center>
<br><br>
<table border="0" width="100%" cellspacing="15">
<tr>
<td class="colorchange"><font size="4"><a href="right_frame.php" target="right">DASHBOARD</a></font></td>
</tr>
<tr>
<td bgcolor="green"><font color="white" size="5">GALLERY</font></td>
</tr>
<tr>
<td class="colorchange"><font size="4"><a href="uploadimage.php" target="right">Add Image</a></font></td>
</tr>
<tr>
<td class="colorchange"><font size="4">Delete Image</font></td>
</tr>
<tr>
<td bgcolor="green"><font color="white" size="5"> BLOG</font></td>
</tr>
<tr>
<td class="colorchange"><font size="4"><a href="Blog.php" target="right">Add Blog</a></font></td>
</tr>
<tr>
<td class="colorchange"><font size="4">Update Blog</font></td>
</tr>
<tr>
<td class="colorchange"><font size="4">Delete Blog</font></td>
</tr>

</table>
</body>
</html>