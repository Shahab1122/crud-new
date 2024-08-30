<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>index</title>
</head>
<body>
    <div class="container my-5">
    <form method="post" action="insertquery.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="fname">Frist-Name</label>
    <input type="text" class="form-control" id="fname"  name="fname">
    <span class="error" style="color:red;"><?php echo isset($nameError) ? $nameError : 'Only text add'; ?></span>
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="lname">Last-Name</label>
    <input type="text" class="form-control" id="lname"  name="lname">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select city</label>
    <select class="form-control" id="exampleFormControlSelect1" name="city">
      <option>Lahore</option>
      <option>Multan</option>
      <option>Islamabad</option>
      <option>Kharachi</option>
      
    </select>
  </div>
  <fieldset class="form-group row">
    <!-- <legend class="col-form-label col-sm-2 float-sm-left pt-0">Radios</legend> -->
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio" id="radio" value="1" checked>
        <label class="form-check-label" for="">
          Male
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio" id="radio" value="0">
        <label class="form-check-label" for="gridRadios2">
          Female
        </label>
      </div>
      <div class="form-check disabled">
        <input class="form-check-input" type="radio" name="radio" id="radio" value="2" >
        <label class="form-check-label" for="gridRadios3">
        Other
        </label>
      </div>
    </div>
  </fieldset>
 
  <input type="checkbox" id="select[]" name="chk_skills[]" value="Htlm">
  <label for="checkbox">Html</label><br>
  <input type="checkbox" id="select[]" name="chk_skills[]" value="php">
  <label for="checkbox">Php</label><br>
  <input type="checkbox" id="select[]" name="chk_skills[]" value="Boat">
  <label for="checkbox">C++</label><br>
  <div class="form-group form-check">
    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1" name="city">
    <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
    <div class="form-group">
    <label for="exampleFormControlFile1">Select You image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
  </div>
  </div>

  <button type="submit" class="btn btn-primary" name="btn_add">Submit</button>
</form>
    </div>
    <!-- <div>
?>

<img src="images/" alt="Profile Image" />


    </div> -->
</body>
</html>