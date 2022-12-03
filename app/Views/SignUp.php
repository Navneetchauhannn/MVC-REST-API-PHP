<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>SignUp</title>
  </head>
  <body>
    <?php
    /*
        include 'navbar.php';
        include 'conn.php';

        $name = $enrollment = $phone = $semester = $department = $password = $skills = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = test_input($_POST["name"]);
        $enrollment = test_input($_POST["enrollment"]);
        $phone = test_input($_POST["phone"]);
        $semester = test_input($_POST["semester"]);
        $department = test_input($_POST["department"]);
        $password = test_input($_POST["password"]);
        $skills = test_input($_POST["skills"]);

        if(!empty($_POST["name"]) && !empty($_POST["enrollment"]) && !empty($_POST["phone"]) && !empty($_POST["semester"]) && !empty($_POST["department"]) && !empty($_POST["skills"]) && !empty($_POST["password"])) {
          if($create->execute()) {
            $_SESSION["name"]=$name;
            $_SESSION["enrollment"]=$enrollment;
            $_SESSION["semester"]=$semester;
            $_SESSION["phone"]=$phone;
            $_SESSION["department"]=$department;
            $_SESSION["skills"]=$skills;

            header('Location: home.php');
          }
          echo "User Created";
        }
      }
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      */
    ?>


<div class="full-width d-flex justify-content-center and align-item-center">
<form class="rounded p-4 p-sm-3" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h3>Sign Up</h3>
<div class="form-group">
    <!-- <label for="exampleInputName">Name</label> -->
    <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Enter Name" >
  </div>
  <div class="form-group">
    <!-- <label for="exampleInputEnrollment">Enrollment</label> -->
    <input type="text" name="enrollment" class="form-control" id="exampleInputEnrollment" placeholder="Enter Enrollment">
  </div>
  <div class="form-group">
    <!-- <label for="exampleInputPhone">Phone</label> -->
    <input type="text" name="phone" class="form-control" id="exampleInputPhone" placeholder="Enter Phone No.">
  </div>
  <div class="form-group">
    <!-- <label for="exampleInputSem">Semester</label> -->
    <input type="text" name="semester" class="form-control" id="exampleInputSem" placeholder="Enter Semester">
  </div>
  <div class="form-group">
    <!-- <label for="exampleInputDepartment">Department</label> -->
    <input type="text" name="department" class="form-control" id="exampleInputDepartment" placeholder="Enter Department">
  </div>
  <div class="form-group">
    <!-- <label for="exampleInputPassword1">Password</label> -->
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <!-- <label for="exampleFormControlSkills">Skills/Achievements</label> -->
    <textarea placeholder="skills/achievement" class="form-control" name="skills" id="exampleFormControlSkills" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" style="width:255px;">SingUp</button>
</form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>