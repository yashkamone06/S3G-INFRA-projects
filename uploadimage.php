<?php
require("Connection.php");
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Image Upload</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Upload Images!</h3>
                        <form class="requires-validation" novalidate>

                            <div class="col-md-12">
                               <input class="form-control" type="date" name="date" placeholder="Date" required>
                               <div class="valid-feedback">Date field is valid!</div>
                               <div class="invalid-feedback">Date field cannot be blank!</div>
                            </div>


                            <div class="col-md-12">
                               <input class="form-control" type="text" name="detail" placeholder="detail" required>
                               <div class="valid-feedback">field is valid!</div>
                               <div class="invalid-feedback">field cannot be blank!</div>
                            </div>

                            

                           <div class="col-md-12">
                                <select class="form-select mt-3" required>
                                      <option selected disabled value="">Category</option>
                                      <option value="roadplant">Roadside Plantation</option>
                                      <option value="routmaint">Routine Maintenance</option>
                                      <option value="aftermaint">After Maintenance</option>
                               </select>
                                <div class="valid-feedback">You selected a category!</div>
                                <div class="invalid-feedback">Please select a category!</div>
                           </div>
                           <p>
                            <p>
                                 Drop Image to upload
                            </p>    
                            <div class="frame">
                            <div class="center">
                              

                                <div class="dropzone">
                                    <img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />
                                    <input type="file" name="file[]" class="upload-input"required >
                                    <div class="valid-feedback"> file is valid!</div>
                                    <div class="invalid-feedback">Please Upload Image!</div>
                                </div>

                                

                            </div>
                        </div>
                    </p>
                           <p>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                          <label class="form-check-label">I confirm that all data are correct</label>
                         <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                        </div>
                  
                    </p>
                            <div class="form-button mt-3">
                                <button id="submit" type="submit" value="Upload File" class="btn btn-primary">submit</button>
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
error_reporting(0);
if(isset($_POST['submit']))

?>
</body>
</html>
