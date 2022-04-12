<?php
include('config.php');
$result = mysqli_query($conn, "SELECT* from qualification ORDER by id DESC");
?>
<!doctype html>
<html lang="en">
  <head>
    <!--   meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Qualification Form</title>
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
        <form action="" method="POST">
     <div class="mb-3 my-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input
            type="text"
            class="form-control"
            placeholder="Enter Name"
            aria-describedby="emailHelp"
            name="Name"
             
          />
        </div>
        <div class="row g-3 my-3">
    <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Select Degree Type</label>
    <select class="form-select" name="SelectDegreeType"   >
        
      <option selected disabled value="">Select Degree</option>
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
    <select class="form-select" name="SelectDegreeTypee"   >
      <option selected disabled value="">Select Degree</option>
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
    <select class="form-select" name="SelectDegreeTypeee"   >
      <option selected disabled value="">Select Degree</option>
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
    <select class="form-select" name="SelectDegreeTypeeee"   >
      <option selected disabled value="">Select Degree</option>
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
<button type="submit" name="submit" class="btn btn-primary my-3">Submit</button>
</form>
       
</div>
  <?php
                if (isset($_POST['submit'])) {
                $Name = $_POST['Name'];
                // $SelectDegreeType = $_POST['SelectDegreeType'];
                 $DegreeName = $_POST['DegreeName'];
                 $PassingYear = $_POST['PassingYear'];
                 $Marks = $_POST['Marks'];
                // $SelectDegreeTypee = $_POST['SelectDegreeTypee'];
                 $DegreeName1 = $_POST['DegreeName1'];
                 $PassingYear1 = $_POST['PassingYear1'];
                 $Marks1 = $_POST['Marks1'];
                // $SelectDegreeTypeee = $_POST['SelectDegreeTypeee'];
                 $DegreeName2 = $_POST['DegreeName2'];
                 $PassingYear2 = $_POST['PassingYear2'];
                 $Marks2 = $_POST['Marks2'];
                // $SelectDegreeTypeeee = $_POST['SelectDegreeTypeeee'];
                 $DegreeName3 = $_POST['DegreeName3'];
                 $PassingYear3 = $_POST['PassingYear3'];
                 $Marks3 = $_POST['Marks3'];
                
               



    $result = mysqli_query($conn, "INSERT into qualification value('', '$Name',  '$DegreeName', '$PassingYear',
     '$Marks',  ' $DegreeName1', ' $PassingYear1', '$Marks1', 
     '$DegreeName2','$PassingYear2','$Marks2','$DegreeName3','$PassingYear3','$Marks3')");
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