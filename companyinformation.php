<?php
include('config.php');
$result = mysqli_query($conn, "SELECT* from second ORDER by id DESC");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Personal Information form</title>
  </head>
  <body>
  <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="double.php">Personal Information Form</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="qualification.php">Enter Qualification</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="companyinformation.php">Enter Company Information</a>
  </li>
  
</ul>
    <div class="container my-5" style="width: 650px">
        <form class="row g-3" action="" method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Employee ID</label>
    <input type="text" class="form-control" name="EmployeeID" placeholder="Enter Employee ID" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Department Designation</label>
    <input type="text" class="form-control" name="Department Designation" placeholder="Enter Department Designation" required>
  </div>
  
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Employee Type</label>
    <input type="text" class="form-control" name="EmployeeType"  placeholder="Enter Employee Type" required>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Basic Salary</label>
    <input type="text" class="form-control" name="BasicSalary"  placeholder="Enter Basic Salary" required>
  </div>
  
  <div class="col-sm">
       <label for="exampleInputPassword1" class="form-label">Salary</label>
    <input type="text" class="form-control" name="DegreeName" placeholder="Enter Salary" aria-label="State"  >
  </div>
  <div class="col-sm">
       <label for="exampleInputPassword1" class="form-label">Allowncess %</label>
    <input type="text" class="form-control" name="Allowncess" placeholder="Enter Allowncess %" aria-label="State"  >
  </div>
  <div class="col-sm">
       <label for="exampleInputPassword1" class="form-label">Amount</label>
    <input type="text" class="form-control" name="Amount" placeholder="Enter Amount " aria-label="Zip"  >
  </div>
        
        <div class="col-12">
    <button type="submit"  name="submit" class="btn btn-primary mx-5 my-3">Submit</button>
  </div>
</form>
    </div>
    <?php
                 if (isset($_POST['submit'])) {
                $Name = $_POST['Name'];
                 $FatherName = $_POST['FatherName'];
                 $Age = $_POST['Age'];
                 $Gender = $_POST['Gender'];
                 $PermanentAddress = $_POST['PermanentAddress'];
                 $ndAddress = $_POST['ndAddress'];
                 $PhoneNo = $_POST['PhoneNo'];
                 $CnicNo = $_POST['CnicNo'];
                 $BloodGroup = $_POST['BloodGroup'];
                 $DateOfBirth = $_POST['DateOfBirth'];
                 $Nationality = $_POST['Nationality'];
                 $Religion = $_POST['Religion'];

    $result = mysqli_query($conn, "INSERT into second value('', '$Name', '$FatherName', '$Age', '$Gender', '$PermanentAddress', ' $ndAddress', ' $PhoneNo', ' $CnicNo', '$BloodGroup', '$DateOfBirth','$Nationality', '$Religion')");
                 }
?>
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