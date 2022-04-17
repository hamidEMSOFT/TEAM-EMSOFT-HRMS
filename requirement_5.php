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
    margin-top: 30px;
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
    <h5><b>Set application preferences</b></h5>
    <label for="staticEmail" class="  col-form-label"><b>How would you like to receive applications?</b></label>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    
    Email
     <br>
    Screen applications individually, received by email.
  </label>
</div>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Walk-in 
    <br>
    Add a street address where people can drop off applications.
  </label>
</div>
 
    <label for="staticEmail" class="  col-form-label"><b>Would you like people to submit a resume?*</b></label>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Yes
    <br>
    People will be required to include a resume.
  </label>
</div>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
   No
    <br>
    People will not be asked to include a resume.
  </label>
</div>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Optional
    <br>
    People can choose whether to include a resume.
  </label>
</div>
  <label for="staticEmail" class="  col-form-label"><b>Is there an application deadline?</b></label>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    
    Yes
    
  </label>
</div>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    No 
   
  </label>
</div>
 <h5><b>Communication settings</b></h5>
 <label for="staticEmail" class=" col-form-label"><b>Send daily updates about this job and applications to:*</b></label>
 <input class="form-control" type="text"    aria-label="default input example" placeholder="Enter Email">
 <h5><b>Message settings</b></h5>
 <label for="staticEmail" class="  col-form-label"><b>Do you want to let people who apply to your job start the conversation?*</b></label>
 <label for="staticEmail" class="  col-form-label">Allow people to contact you about their applications. Messages will be sent to the same email address you provided for daily updates.</label>
 <div class="form-check">
     <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
     <label class="form-check-label" for="defaultCheck1">
         
         Yes
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
            No
        </label>
    </div>
    <h5><b>Employer Assist</b></h5>
    <label for="staticEmail" class="  col-form-label">Indeed will decline candidates you're not interested in on your behalf.</label>
    <label for="customRange1" class="form-label"><b>If I don't show interest, automatically decline each candidate after:</b></label>
    <input type="range" class="form-range" id="customRange2">
    
    <button type="button" class="btn btn-dark ">Back</button>
    <a href="requirement_6.php">
        <button type="button" class="btn  btn-primary my-3 mx-5">Save and continue</button>
    </a>
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