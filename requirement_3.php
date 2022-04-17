<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
  .container2{
     width: 50%;
    position: absolute;
    text-align: left;
    padding: 10px;
    align-content: left;
    margin-left: 30px;
    margin-top: 150px;
    border: 2px solid black;
  }
 
  img{
    height: 40%;
     display: flex;
    position: absolute;
    margin-left: 700px;
     margin-top: 200px;
     
  }
</style>
    <title>HRMS.com</title>
  </head>
  <body>
    <div class="container2" style="width: 600px">
    <h5><b>Add Compensation</b></h5>
       <label for="staticEmail" class=" col-form-label"><b>What is the pay?</b></label>
         <div class="col-sm-3">
   <label for="staticEmail" class=" col-form-label">Show pay by</label>
    <select class="form-select" id="specificSizeSelect">
      <option selected>Range</option>
      <option value="1">Starting Month</option>
      <option value="2">Maximum Amount</option>
      <option value="2">Exact Amount</option>
    </select>
  </div>
       <form class="row gy-2 gx-3 align-items-center">
  <div class="col-auto">
     <label for="staticEmail" class=" col-form-label">Minimum</label>
    <input type="text" class="form-control" id="autoSizingInput" placeholder="PKR">
  </div>
  <div class="col-auto">
     <label for="staticEmail" class=" col-form-label">Maximum</label>
    <div class="input-group">
     
      <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="PKR">
    </div>
  </div>
  <div class="col-auto">
     <label for="staticEmail" class=" col-form-label">Rate</label>
    <select class="form-select" id="autoSizingSelect">
      <option selected>per hour </option>
      <option value="1">per day</option>
      <option value="2">per week</option>
      <option value="3">per month</option>
      <option value="3">per year</option>
    </select>
  </div>
 
  
</form>
       <!-- <input class="form-control" type="text"    aria-label="default input example">
      
  <label for="staticEmail" class="  col-form-label"><b>Where would you like to advertise this job?*</b></label>
    <input class="form-control" type="text"    aria-label="default input example">
    <label for="staticEmail" class="  col-form-label"><b>Is this a full-time or part-time job?*</b></label>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Full-Time
  </label>
</div>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Part-Time
  </label>
</div>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Either full-time or part-time
  </label>
</div>
    <label for="staticEmail" class="  col-form-label"><b>Do any of these job types apply?</b></label>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Temporary
  </label>
</div>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
   Contract
  </label>
</div>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Internship
  </label>
</div>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Fresher
  </label>
</div>
<label for="staticEmail" class="  col-form-label"><b>How you heard about us</b></label>
    <select class="form-control" aria-label=".form-select-sm example">
  <option selected>Select an option</option>
  <option value="1">1 </option>
<option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  
  <option value="6">7</option>
  
  <option value="6">8</option>
  <option value="6">9</option>
  <option value="6">10</option>
  <option value="6">10+</option>
  <option value="6">I have an ongoing need to fill this roll</option>
  
</select>
<label for="staticEmail" class="  col-form-label"><b>How quickly do you need to hire?*</b></label>
     <select class="form-control" aria-label=".form-select-sm example">
  <option selected>Select an option</option>
  <option value="1">1 to 3 days </option>
  <option value="2">3 to 7 days</option>
  <option value="3">1 to 2 weeks</option>
  <option value="4">2 to 4 weeks</option>
  <option value="5">more than 4 weeks </option>
  >
  
</select> -->

<button type="button" class="btn btn-dark ">Back</button>
<button type="button" class="btn  btn-primary my-3 mx-5">Save and continue</button>
</div>
<div class= "img" style="height:300px">
 <img src="rec.png" alt="" >
 </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>