<?php
error_reporting(0);
include('config.php');
// $query = "SELECT * FROM employee";
// $query_run = mysqli_query($conn, $query);
$data = "SELECT * FROM designation";
$query_data = mysqli_query($conn, $data);
$aliyan = mysqli_query($conn, "SELECT* from information ORDER by id DESC");
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
    <!-- <style>
      .personal{
    width: 50%;
    display: flex;
    position: absolute;
    text-align: left;
    align-content: left;
    margin-left: 150px;
    margin-top: 50px;
  }
      .qualification{
    width: 50%;
    display: grid;
    position: relative;
    text-align: right;
    align-content: right;
    margin-left: 450px;
    margin-top: 50px;
  }
    </style> -->
  </head>
  <body>
 
    <div class="container my-5  " style="width:700px" >
      <h5 class="my-2 ">Enter Your Personal Information</h5>
    <!-- <div class="personal"> -->
        <form class="row g-3 my-3 " method="post">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" class="form-control" name="Name" placeholder="Enter Name" required>
  </div>
  <div class="col-md-6 justify-content-start">
    <label for="inputPassword4" class="form-label">Father Name</label>
    <input type="text" class="form-control" name="FatherName" placeholder="Enter Father Name" required>
  </div>
  <div class="mb-3">
  <label for="formFile" class="form-label">Enter Your Profile Picture</label>
  <input class="form-control" type="file" name="YourProfilePicture">
</div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Age</label>
    <input type="text" class="form-control" name="Age"  placeholder="Enter Age" required>
  </div>
  <div class="col-md-6">
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
    <input type="text" class="form-control" name="PermanentAddress" placeholder="Enter Permanent Address" required>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">2nd Address</label>
    <input type="text" class="form-control" name="ndAddress" placeholder="Enter 2nd Address" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Phone No</label>
    <input type="text" class="form-control" name="PhoneNo"  placeholder="Enter Phone No" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Cnic No</label>
    <input type="text" class="form-control" name="CnicNo" placeholder="Enter Cnic No" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Blood Group</label>
    <input type="text" class="form-control" name="BloodGroup" placeholder="Enter Blood Group" required >
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Date Of Birth</label>
    <input type="date" class="form-control" name="DateOfBirth" placeholder="Enter Date Of Birth" required>
  </div>
  <div class="col-md-6">
    <label for="inputState" class="form-label ">Nationality</label>
    <select id="inputState" name="Nationality" class="form-select ">
      <option selected>Select Nationality</option>
      <option value="Pakistani">Pakistani</option>
          <option value="Other">Other</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputState" class="form-label ">Religion</label>
    <select id="inputState" name="Religion" class="form-select ">
      <option selected>Select Religion</option>
        <option value="Islam">Islam</option>
          <option value="Other">Other</option>
    </select>
  </div>
  <h5 class="my-3" >Enter Your Latest Qualification</h5>
  
   <div class="col-sm-3">
    <label class="form-label" for="specificSizeSelect">Degree Type</label>
    <select class="form-select" name="DegreeType" id="specificSizeSelect">
      <option selected>Select Degree</option>
      <option value="1">Bachlor's</option>
      <option value="2">ADP</option>
      <option value="3">Intermediate</option>
      <option value="4">Matriculation</option>
    </select>
  </div>
   <div class="col-sm-3">
    <label class="form-label" for="specificSizeInputName">Degree Name</label>
    <input type="text" class="form-control" name="DegreeName" placeholder="Enter Degree Name">
  </div>
  <div class="col-sm-3">
    <label class="form-label" for="specificSizeInputGroupUsername">Passing Year</label>
    <div class="input-group">
      <input type="date" class="form-control" name="PassingYear" placeholder="Enter Passig Year">
    </div>
  </div>
  <div class="col-sm-3">
    <label class="form-label" for="specificSizeInputGroupUsername">Marks/CGPA</label>
    <div class="input-group">
      <input type="text" class="form-control" name="Marks" placeholder="Enter Marks/CGPA">
    </div>
  </div>
 <h5 class="my-3" >Enter Company Information</h5>
 <div class="row g-3">
  <div class="col">
    <label class="form-label" for="specificSizeInputName">Employee ID</label>
    <input type="text" class="form-control" name="EmployeeID" placeholder="Enter Employee ID" aria-label="First name">
  </div>
   <div class="col">
      <label class="form-label" for="specificSizeInputName">Company Designation</label> 
  <?php
      // if (mysqli_num_rows($query_data) > 0) {
      //   while ($row = mysqli_fetch_assoc($query_data)) {
          ?>
      <select class="form-select" name="CompanyDesignation" >
      <option selected>Select Designation</option>
    <option value="First">Designation Title : <?php echo $row['DesignationTitle'] ?></option>
    <option value="First">Designation ID : <?php echo $row['DesignationID'] ?></option>
    <option value="First">Color : <?php echo $row['PickColor'] ?></option>
      
    </select>
  <?php
      //   }
      // }
      ?>
      </div>
</div>
<div class="row g-3">
  <div class="col">
    <label class="form-label" for="specificSizeInputName">Employee Type</label>
    <input type="text" class="form-control" name="EmployeeType" placeholder="Enter Employee Type" aria-label="First name">
  </div>
  <div class="col">
    <label class="form-label" for="specificSizeInputName">Basic Salary</label>
    <input type="text" class="form-control" name="BasicSalary" placeholder="Enter Basic Salary" aria-label="Last name">
  </div>
</div>
<div class="row g-3">
  
  <div class="col-sm">
    <label class="form-label" for="specificSizeInputName">Salary</label>
    <input type="text" class="form-control" name="Salary" placeholder="Salary" aria-label="State">
  </div>
  <div class="col-sm">
    <label class="form-label" for="specificSizeInputName">Allowncess %</label>
    <input type="text" class="form-control" name="Allowncess" placeholder="Allowncess" aria-label="State">
  </div>
  <div class="col-sm">
    <label class="form-label" for="specificSizeInputName">Total Amount</label>
    <input type="text" class="form-control" name="TotalAmount" placeholder="TotalAmount" aria-label="Zip">
  </div>
</div>
          <button   name="submit" class="btn btn-primary ">Submit</button>
  
          </form>
       
            </div>

    <?php
                 if (isset($_POST['submit'])) {
                 $Name = $_POST['Name'];
                 $FatherName = $_POST['FatherName'];
                 $YourProfilePicture = $_POST['YourProfilePicture'];
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
                 $DegreeType = $_POST['DegreeType'];
                 $DegreeName = $_POST['DegreeName'];
                 $PassingYear = $_POST['PassingYear'];
                 $Marks = $_POST['Marks'];
                 $EmployeeID = $_POST['EmployeeID'];
                 $CompanyDesignation = $_POST['CompanyDesignation'];
                 $EmployeeType = $_POST['EmployeeType'];
                 $BasicSalary = $_POST['BasicSalary'];
                 $Salary = $_POST['Salary'];
                 $Allowncess = $_POST['Allowncess'];
                 $TotalAmount = $_POST['TotalAmount'];
                 



    $aliyan = mysqli_query($conn, "INSERT into information value('', '$Name', '$FatherName','$YourProfilePicture',
     '$Age', '$Gender', '$PermanentAddress',
     ' $ndAddress', ' $PhoneNo', ' $CnicNo',
      '$BloodGroup', '$DateOfBirth','$Nationality', '$Religion', '$DegreeType', '$DegreeName','$PassingYear',
     '$Marks',
      '$EmployeeID', '$CompanyDesignation','$EmployeeType', '$BasicSalary', '$Salary', '$Allowncess','$TotalAmount')");
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