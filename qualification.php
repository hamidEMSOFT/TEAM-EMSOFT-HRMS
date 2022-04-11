<!doctype html>
<html lang="en">
  <head>
    <!--   meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="ms-auto">
       <a href="index.php" style="text-decoration:none">
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
    <div class="container" style="width: 850px">
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
    <select class="form-select" id="validationDefault04"  >
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
    <input type="text" class="form-control" name="Marks/CGPA" placeholder="Enter Marks/CGPA " aria-label="Zip"  >
  </div>
</div>
        <div class="row g-3 my-3">
    <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Select Degree Type</label>
    <select class="form-select" id="validationDefault04"  >
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
    <input type="text" class="form-control" name="Marks/CGPA" placeholder="Enter Marks/CGPA " aria-label="Zip"  >
  </div>
</div>
        <div class="row g-3 my-3">
    <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Select Degree Type</label>
    <select class="form-select" id="validationDefault04"  >
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
    <input type="text" class="form-control" name="Marks/CGPA" placeholder="Enter Marks/CGPA " aria-label="Zip"  >
  </div>
</div>
        <div class="row g-3 my-3">
    <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Select Degree Type</label>
    <select class="form-select" id="validationDefault04"  >
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
    <input type="text" class="form-control" name="Marks/CGPA" placeholder="Enter Marks/CGPA " aria-label="Zip"  >
  </div>
</div>
       
  <button type="submit" name="submit" class="btn btn-primary my-3">Submit</button>
    </div>

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