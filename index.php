<?php
include('config.php');
$result = mysqli_query($conn, "SELECT* from personalinformation ORDER by id DESC");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>Personal Information form</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="ms-auto">
       <a href="index.php" style="text-decoration:none">
        <button class="btn btn-outline-primary mx-5">
          Enter Personal Information
        </button>
        </a>
        <a href="qualification.php" style="text-decoration:none">
        <button class="btn btn-outline-primary mx-4">
          Enter Qualification
        </button>
        </a>
        <button class="btn btn-outline-primary mx-4">
          Enter Company Information
        </button>
      </div>
    </nav>
    <div class="container" style="width: 850px">
      <form action="" method="POST">
        <div class="mb-3 my-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input
            type="text"
            class="form-control"
            placeholder="Enter Name"
            aria-describedby="emailHelp"
            name="Name"
            required
          />
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label"
            >Father Name</label
          >
          <input
            type="text"
            class="form-control"
            name="FatherName"
             placeholder="Enter Father Name"
            required
          />
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Age</label>
          <input
            type="text"
            class="form-control"
            name="Age"
             placeholder="Enter Age"
            required
          />
        </div>
        <label for="exampleInputPassword1" class="form-label">Gender</label>
        <select class="form-select" name="Gender"  aria-label="Default select example">
          <option value=""></option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>
        <div class="mb-3 my-3">
          <label for="exampleInputPassword1" class="form-label">Address</label>
          <input
            type="text"
            class="form-control"
            name="Address"
             placeholder="Enter Address"
            required
          />
        </div>
        <div class="mb-3 my-3">
          <label for="exampleInputPassword1" class="form-label">Phone No</label>
          <input
            type="text"
            class="form-control" 
            name="PhoneNo"
             placeholder="Enter Phone No"
            required
          />
        </div>
        <div class="mb-3 my-3">
          <label for="exampleInputPassword1" class="form-label">CNIC No</label>
          <input
            type="text"
            class="form-control"
            name="CNICNo"
             placeholder="Enter CNIC No"
            required
          />
        </div>
        <div class="mb-3 my-3">
          <label for="exampleInputPassword1" class="form-label"
            >Blood Group</label
          >
          <input
            type="text"
            class="form-control"
            name="BloodGroup"
             placeholder="Enter Blood Group"
            required
          />
        </div>
        <label for="exampleInputPassword1" class="form-label"
          >Nationality</label
        >
        <select class="form-select my-1" name="Nationality" aria-label="Default select example">
          <option value=""></option>
          <option value="Pakistani">Pakistani</option>
          <option value="Other">Other</option>
        </select>
        <label for="exampleInputPassword1 my-3" class="form-label my-2"
          >Religion</label
        >
        <select class="form-select" name="Religion" aria-label="Default select example">
          <option value=""></option>
          <option value="Islam">Islam</option>
          <option value="Other">Other</option>
        </select>

        <button type="submit" name="submit" class="btn btn-primary my-3">Submit</button>
      </form>
    </div>
      <?php
    //              if (isset($_POST['submit'])) {
    //             $Name = $_POST['Name'];
    //              $FatherName = $_POST['FatherName'];
    //              $Age = $_POST['Age'];
    //              $Gender = $_POST['Gender'];
    //              $Address = $_POST['Address'];
    //              $PhoneNo = $_POST['PhoneNo'];
    //              $CNICNo = $_POST['CNICNo'];
    //              $BloodGroup = $_POST['BloodGroup'];
    //              $Nationality = $_POST['Nationality'];
    //              $Religion = $_POST['Religion'];
               



    // $result = mysqli_query($conn, "INSERT into personalinformation value('', '$Name', '$FatherName', '$Age', '$Gender', '$Address', ' $PhoneNo', ' $CNICNo', ' $BloodGroup', '$Nationality', '$Religion ')");
    //              }
                //  session_destroy();
                 ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
