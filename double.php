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
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="ms-auto">
       <a href="index.html"></a>
        <button class="btn btn-outline-primary mx-5">
          Enter Personal Information
        </button>
        </a>
        <button class="btn btn-outline-primary mx-4">
          Enter Qualification
        </button>

        <button class="btn btn-outline-primary mx-4">
          Enter Company Information
        </button>
      </div>
    </nav>
    <div class="container my-5" style="width: 650px">
        <form class="row g-3" action="" method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" class="form-control" name="Name" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Father Name</label>
    <input type="text" class="form-control" name="FatherName" required>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Age</label>
    <input type="text" class="form-control" name="Age" required>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Gender</label>
    <select id="inputState" name="Gender" class="form-select">
      <option selected>Select Gender</option>
      <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Permanent Address</label>
    <input type="text" class="form-control" name="PermanentAddress" required>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">2nd Address</label>
    <input type="text" class="form-control" name="ndAddress" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Phone No</label>
    <input type="text" class="form-control" name="PhoneNo" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Cnic No</label>
    <input type="text" class="form-control" name="CnicNo" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Blood Group</label>
    <input type="text" class="form-control" name="BloodGroup" required >
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Date Of Birth</label>
    <input type="date" class="form-control" name="DateOfBirth" required>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label mx-3">Nationality</label>
    <select id="inputState" name="Nationality" class="form-select mx-3">
      <option selected>Select Nationality</option>
      <option value="Pakistani">Pakistani</option>
          <option value="Other">Other</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label mx-5">Religion</label>
    <select id="inputState" name="Religion" class="form-select mx-5">
      <option selected>Select Religion</option>
        <option value="Islam">Islam</option>
          <option value="Other">Other</option>
    </select>
  </div>
  <div class="col-12">
    <button type="submit"  name="submit" class="btn btn-primary my-3">Submit</button>
  </div>
</form>
    </div>
    <?php
    //              if (isset($_POST['submit'])) {
    //             $Name = $_POST['Name'];
    //              $FatherName = $_POST['FatherName'];
    //              $Age = $_POST['Age'];
    //              $Gender = $_POST['Gender'];
    //              $PermanentAddress = $_POST['PermanentAddress'];
    //              $ndAddress = $_POST['ndAddress'];
    //              $PhoneNo = $_POST['PhoneNo'];
    //              $CnicNo = $_POST['CnicNo'];
    //              $BloodGroup = $_POST['BloodGroup'];
    //              $DateOfBirth = $_POST['DateOfBirth'];
    //              $Nationality = $_POST['Nationality'];
    //              $Religion = $_POST['Religion'];
               



    // $result = mysqli_query($conn, "INSERT into second value('', '$Name', '$FatherName', '$Age', '$Gender', '$PermanentAddress', ' $ndAddress', ' $PhoneNo', ' $CnicNo', '$BloodGroup', '$DateOfBirth','$Nationality', '$Religion')");
    //              }
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