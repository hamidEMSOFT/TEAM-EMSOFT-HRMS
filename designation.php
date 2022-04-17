<?php
error_reporting(0);
include('config.php');

$hamid = mysqli_query($conn, "SELECT* from designation ORDER by id DESC");

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Company Designation</title>
  </head>
  <body>
    
<div class="container" style="width: 700px">
     <form  method="POST">
        <h5 class="my-4">DESIGNATION</h5>
  <div class="mb-3 my-4">
    <label for="exampleInputEmail1" class="form-label">Designation Title</label>
    <input type="text" class="form-control" name="DesignationTitle" placeholder="Enter Designation Title "  aria-describedby="emailHelp" required>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Designation ID</label>
    <input type="text" name="DesignationID" placeholder="Enter Designation ID " class="form-control" required>
  </div>
  <label for="exampleColorInput" class="form-label "> Pick Color </label>
<input type="color" class="form-control form-control-color justify-content-center " name="PickColor" value="#563d7c" title="Choose your color" required>
  <button name="ADD" class="btn btn-primary my-4">ADD</button>
</form>
 <?php
                 if(isset($_POST['ADD'])) {
                 $DesignationTitle = $_POST['DesignationTitle'];
                 $DesignationID = $_POST['DesignationID'];
                 $PickColor = $_POST['PickColor'];
    $hamid = mysqli_query($conn, "INSERT into designation value( '', '$DesignationTitle', '$DesignationID','$PickColor')");
         header("department.php");
         exit;        
  };
?>
</div>

<!-- </div> -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>