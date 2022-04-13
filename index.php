<?php
error_reporting(0);
include('config.php');
$query = "SELECT * FROM employee";
$query_run = mysqli_query($conn, $query);
$data = "SELECT * FROM designation";
$query_data = mysqli_query($conn, $data);
$result = mysqli_query($conn, "SELECT* from information ORDER by id DESC");
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
 
    <div class="container my-5  " style="width:700px" >
    
    <h3 class="my-2">Enter Your Personal Information</h3>
        <form class="row g-3 my-3 " method="POST">
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
  


  <h3 class="my-5">Enter Your Qualification</h3>
    <div class="row g-3 my-3">
    <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Select Degree Type</label>
    <select class="form-select" name="SelectDegreeType"   >
      <option selected >Select Degree</option>
      <option value="Bachelor's">Bachelor's</option>
          <option value="ADP">ADP</option>
          <option value="Intermediate">Intermediate</option>
          <option value="Matriculation">Matriculation</option>
    </select>
  </div>
  <div class="col-sm">
       <label for="exampleInputPassword1" class="form-label">Degree Name</label>
    <input type="text" class="form-control" name="DegreeName" placeholder="Enter Degree Name" aria-label="State"  >
  </div>
  <div class="col-sm">
       <label for="exampleInputPassword1" class="form-label">Passing Year</label>
    <input type="date" class="form-control" name="PassingYear" placeholder="Enter Passing Year" aria-label="State"  >
  </div>
  <div class="col-sm">
       <label for="exampleInputPassword1" class="form-label">Marks/CGPA</label>
    <input type="text" class="form-control" name="Marks" placeholder="Enter Marks/CGPA " aria-label="Zip"  >
  </div>
</div>
        <div class="row g-3 my-3">
    <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Select Degree Type</label>
    <select class="form-select" name="SelectDegreeType1"   >
      <option selected >Select Degree</option>
      <option value="Bachelor's">Bachelor's</option>
          <option value="ADP">ADP</option>
          <option value="Intermediate">Intermediate</option>
          <option value="Matriculation">Matriculation</option>
    </select>
  </div>
  <div class="col-sm">
       <label for="exampleInputPassword1" class="form-label">Degree Name</label>
    <input type="text" class="form-control" name="DegreeName1" placeholder="Enter Degree Name" aria-label="State"  >
  </div>
  <div class="col-sm">
       <label for="exampleInputPassword1" class="form-label">Passing Year</label>
    <input type="date" class="form-control" name="PassingYear1" placeholder="Enter Passing Year" aria-label="State"  >
  </div>
  <div class="col-sm">
       <label for="exampleInputPassword1" class="form-label">Marks/CGPA</label>
    <input type="text" class="form-control" name="Marks1" placeholder="Enter Marks/CGPA " aria-label="Zip"  >
  </div>
</div>
        <div class="row g-3 my-3">
    <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Select Degree Type</label>
    <select class="form-select" name="SelectDegreeType2"   >
      <option selected >Select Degree</option>
      <option value="Bachelor's">Bachelor's</option>
          <option value="ADP">ADP</option>
          <option value="Intermediate">Intermediate</option>
          <option value="Matriculation">Matriculation</option>
    </select>
  </div>
  <div class="col-sm">
       <label for="exampleInputPassword1" class="form-label">Degree Name</label>
    <input type="text" class="form-control" name="DegreeName2" placeholder="Enter Degree Name" aria-label="State"  >
  </div>
  <div class="col-sm">
       <label for="exampleInputPassword1" class="form-label">Passing Year</label>
    <input type="date" class="form-control" name="PassingYear2" placeholder="Enter Passing Year" aria-label="State"  >
  </div>
  <div class="col-sm">
       <label for="exampleInputPassword1" class="form-label">Marks/CGPA</label>
    <input type="text" class="form-control" name="Marks2" placeholder="Enter Marks/CGPA " aria-label="Zip"  >
  </div>
</div>
        <div class="row g-3 my-3">
    <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Select Degree Type</label>
    <select class="form-select" name="SelectDegreeType3"   >
      <option selected >Select Degree</option>
      <option value="Bachelor's">Bachelor's</option>
          <option value="ADP">ADP</option>
          <option value="Intermediate">Intermediate</option>
          <option value="Matriculation">Matriculation</option>
    </select>
  </div>
  <div class="col-sm">
       <label for="exampleInputPassword1" class="form-label">Degree Name</label>
    <input type="text" class="form-control" name="DegreeName3" placeholder="Enter Degree Name" aria-label="State"  >
  </div>
  <div class="col-sm">
       <label for="exampleInputPassword1" class="form-label">Passing Year</label>
    <input type="date" class="form-control" name="PassingYear3" placeholder="Enter Passing Year" aria-label="State"  >
  </div>
  <div class="col-sm">
       <label for="exampleInputPassword1" class="form-label">Marks/CGPA</label>
    <input type="text" class="form-control" name="Marks3" placeholder="Enter Marks/CGPA " aria-label="Zip"  >
  </div>
</div>


<h3 class="my-5">Enter Company Information</h3>

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Employee ID</label>
    <input type="text" class="form-control" name="EmployeeID" placeholder="Enter Employee ID" required>
  </div>
  
  <div class="col-md-6">
    <label for="inputState" class="form-label ">Company Designation</label>
    
            
    <?php 
        // if (mysqli_num_rows($query_run ) > 0) {
        //   while ($row = mysqli_fetch_assoc($query_run )) {
            ?>
            <select id="inputState" name="CompanyDesignation" class="form-select ">
                    <option selected>Designations</option>
                    <!-- for Emploeee Data Fetch -->
     <!-- <option value=""> Department Name:  <?php echo $row['EmployeeType'] ?></option>
     <option value=""> Department ID:   <?php echo $row['EmployeeID'] ?></option> -->

     <!-- For Department Data Fetch -->
     <!-- <option value=""> Department Name:  <?php echo $row['DepartmentName'] ?></option>
     <option value=""> Department ID:   <?php echo $row['DepartmentID'] ?></option> -->

     <!-- For Designation Data Fetch -->
<!--      
     <option value=""> Designation Title:  <?php echo $row['DesignationTitle'] ?></option>
     <option value=""> Designation ID:   <?php echo $row['DesignationID'] ?></option>
     <option value=""> Color:   <?php echo $row['PickColor'] ?></option>  -->
     
 
         
            
          
   
    </select>
    <?php
      //   }
      // } 
      ?>
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
    <input type="text" class="form-control" name="Salary" placeholder="Enter Salary" aria-label="State" required >
  </div>
  <div class="col-sm">
       <label for="exampleInputPassword1" class="form-label">Allowncess %</label>
    <input type="text" class="form-control" name="Allowncess" placeholder="Enter Allowncess %" aria-label="State" required >
  </div>
  <div class="col-sm">
       <label for="exampleInputPassword1" class="form-label">Amount</label>
    <input type="text" class="form-control" name="Amount" placeholder="Enter Amount " aria-label="Zip" required >
  </div>
  

          <button type="submit"  name="submit" class="btn btn-primary ">Submit</button>
  
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
                 $SelectDegreeType = $_POST['SelectDegreeType'];
                 $DegreeName = $_POST['DegreeName'];
                 $PassingYear = $_POST['PassingYear'];
                 $Marks = $_POST['Marks'];
                 $SelectDegreeType1 = $_POST['SelectDegreeType1'];
                 $DegreeName1 = $_POST['DegreeName1'];
                 $PassingYear1 = $_POST['PassingYear1'];
                 $Marks1 = $_POST['Marks1'];
                 $SelectDegreeType2 = $_POST['SelectDegreeType2'];
                 $DegreeName2 = $_POST['DegreeName2'];
                 $PassingYear2 = $_POST['PassingYear2'];
                 $Marks2 = $_POST['Marks2'];
                 $SelectDegreeType3 = $_POST['SelectDegreeType3'];
                 $DegreeName3 = $_POST['DegreeName3'];
                 $PassingYear3 = $_POST['PassingYear3'];
                 $Marks3 = $_POST['Marks3'];
                 $EmployeeID = $_POST['EmployeeID'];
                 $CompanyDesignation = $_POST['CompanyDesignation'];
                 $EmployeeType = $_POST['EmployeeType'];
                 $BasicSalary = $_POST['BasicSalary'];
                 $Salary = $_POST['Salary'];
                 $Allowncess = $_POST['Allowncess'];
                 $Amount = $_POST['Amount'];
                 



    $result = mysqli_query($conn, "INSERT into information value('', '$Name', '$FatherName','$YourProfilePicture', '$Age', '$Gender', '$PermanentAddress',
     ' $ndAddress', ' $PhoneNo', ' $CnicNo', '$BloodGroup', '$DateOfBirth','$Nationality', '$Religion','$SelectDegreeType','$DegreeName',
     '$PassingYear','$Marks','$SelectDegreeType1','$DegreeName1','$PassingYear1','$Marks1','$SelectDegreeType2','$DegreeName2',
     '$PassingYear2','$Marks2','$SelectDegreeType3','$DegreeName3','$PassingYear3','$Marks3','$EmployeeID','$CompanyDesignation','$EmployeeType',
     '$BasicSalary','$Salary','$Allowncess','$Amount')");
                 };
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