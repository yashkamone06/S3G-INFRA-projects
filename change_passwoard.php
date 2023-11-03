<?php
require("Connection.php");
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Change Passwoard!</h3>
                        <form method ="POST"class="requires-validation" novalidate>

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="username" placeholder="username" required>
                               <div class="valid-feedback">Date field is valid!</div>
                               <div class="invalid-feedback">Date field cannot be blank!</div>
                            </div>


                            <div class="col-md-12">
                               <input class="form-control" type="text" name="pass" placeholder="New Passwoard" required>
                               <div class="valid-feedback">field is valid!</div>
                               <div class="invalid-feedback">field cannot be blank!</div>
                            </div>

               
                            <div class="form-button mt-3">
                                <button id="button" name="submit" type="submit" value="Change Passwoard" class="btn btn-primary">Change Passwoard</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- partial -->
  <script  src="./script.js"></script>
<?php
if(isset($_POST['submit']))
{
$id = $_POST['username'];
$pass = $_POST['pass'];	
$query ="UPDATE `admin_login` SET `Admin_Password`='$pass' WHERE `Admin_Name`='$id'";
$data = mysqli_query($con,$query);
if($data)
{
	echo "<script>alert('Password Changed')</script>";
}
else
{
echo "<script>alert('Failed to Change Password')</script>"; 
}
}
?>
</body>
</html>
