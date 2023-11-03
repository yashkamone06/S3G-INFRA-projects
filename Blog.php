<?php
require("Connection.php");
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Blog</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://cdn.rawgit.com/bootstrap-wysiwyg/bootstrap3-wysiwyg/master/src/bootstrap3-wysihtml5.css'><link rel="stylesheet" href="./style1.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <input type="text" class="form-control" name="title" placeholder="Title"/>
        </div>
        <div class="form-group">
          <label> Image </label>
          <div class="input-group">
            
            <span class="input-group-btn">
              <span class="btn btn-primary btn-file">
                Browse <input type="file" name="image">
              </span>
             </span>
            <input type="text" class="form-control" readonly>
           </div>
        </div>
        <div class="form-group">
          <textarea class="form-control bcontent" name="content"></textarea>
        </div>
        <div class="form-group">
           <input type="submit" name="submit" value="Publish" class="btn btn-primary form-control" />
        </div>
      </form>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-1.11.3.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src='https://cdn.rawgit.com/bootstrap-wysiwyg/bootstrap3-wysiwyg/master/dist/bootstrap3-wysihtml5.all.min.js'></script><script  src="./script1.js"></script>

<?php
error_reporting(0);
if($_POST['submit']);
{
	$title = $_POST['title'];
	$content = $_POST['content'];
	$img = $_FILES['image']['name'];
	$tempname = $_FILES['image']['tmp_name'];
	//$folder = "blogimg".$filename;
	move_uploaded_file($tempname,"blogimg/$img");
	
	if($title!="" && $content!="" && $img!="")
	{
		$query = "INSERT INTO `blog`(`title`, `image`, `content`) VALUES ('$title','$img','$content')";
		$data = mysqli_query($con,$query);
		
		if($data)
		{
			echo "<script>alert('Blog uploaded successfully')</script>";
		}
		else
		{
			echo"<script>alert('Blog is not uploaded try again')</script>";
		}
	}
	
	
	
}
?>
</body>
</html>
