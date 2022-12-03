<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Update Team</title>
  </head>
  <body>
  <?php
        // include 'navbar.php';
        // include 'conn.php';

        // if(!isset($_SESSION["enrollment"])) {
        //   header("Location: login.php");
        // }

        // $teamid="";
        // if(isset($_GET['edit'])) {
        //   $teamid=$_GET['edit'];
        // } else {
        //   echo "not get";
        //   header("Location: profile.php");
        // }

        // $homeQ->execute();
        // $res = $homeQ->get_result();
        // if($res->num_rows > 0) {
        //   $row = $res->fetch_assoc();
        //   $eventname=$row["eventname"];
        //   $prblmsmt=$row["prblmsmt"];
        //   $mrequired=$row["mrequired"];
        // } else {
        //   echo "record not found";
        // }

        // if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //   $eventname = test_input($_POST["eventname"]);
        //   $mrequired = test_input($_POST["mrequired"]);
        //   $prblmsmt = test_input($_POST["prblmsmt"]);
        //   if(isset($_GET['edit'])) {
        //     $teamid=$_GET['edit'];
        //   } else {
        //     echo "not get";
        //     header("Location: profile.php");
        //   }
          
        //   if(!empty($_POST["eventname"]) && !empty($_POST["mrequired"]) && !empty($_POST["prblmsmt"])) {
        //     if($update->execute()) {
        //       header("Location: profile.php");
        //       echo $_POST["mrequired"];
        //     } else {
        //       echo "Data Not Updated";
        //     }
        //   }
        // }
        // function test_input($data) {
        //   $data = trim($data);
        //   $data = stripslashes($data);
        //   $data = htmlspecialchars($data);
        //   return $data;
        // }

    ?>


<div class="full-width d-flex justify-content-center and align-item-center">
  <form class="rounded p-4 p-sm-3" method="POST" action="<?php echo htmlspecialchars("".$_SERVER["PHP_SELF"]."?edit=$teamid");?>">
  <h3>Update Team</h3>
  <div class="form-group">
    <label class="required-field" for="formGroupExampleInput">Event Name</label>
    <input type="text" name="eventname" class="form-control" id="eventName" value="<?php echo $homeData[0]['eventname'];?>" placeholder="Event Name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSkills">Problem Statement</label>
    <textarea name="prblmsmt" class="form-control" id="exampleFormControlPs" value="<?php echo $homeData[0]['prblmsmt'];?>" placeholder="<?php echo $homeData[0]['prblmsmt']?>" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label class="required-field" for="formGroupExampleInput">Members Required</label>
    <input type="text" name="mrequired" class="form-control" id="formGroupExampleMreqired" value="<?php echo $homeData[0]['mrequired']?>" placeholder="Mermbers Required">
  </div>
  <button type="submit" class="btn btn-primary" style="width:255px;">Update Team</button>
</form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>