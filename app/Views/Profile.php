<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Profile</title>
  </head>
  <body>
<section class="vh-100" style="background-color: #9de2ff;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-md-9 col-lg-7 col-xl-5">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-4">
            <div class="d-flex text-black">
              <div class="flex-shrink-0">
                <img src="../public/img/profile.png"
                  alt="Profile Picture" class="img-fluid"
                  style="width: 180px; border-radius: 10px;">
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="mb-1"><?php echo $_SESSION["name"]?></h5>
                <p class="mb-2 pb-1" style="color: #2b2a2a;"><?php echo $_SESSION["department"]?>-<?php echo $_SESSION["semester"]?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">Enrollment</th>
      <th scope="col">Phone</th>
      <th scope="col">Event Name</th>
      <th scope="col">Problem Statement</th>
      <th scope="col">Members Required</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if($profileData) {
    foreach($profileData as $profile) {
        $id=$profile["teamid"];
        echo "<tr id='$profile[teamid]'><td>$profile[enrollment]</td><td>$profile[phone]</td><td>$profile[eventname]</td><td>$profile[prblmsmt]</td><td>$profile[mrequired]</td><td><a class='btn btn-primary btn-sm' href='update?edit=$id'>Edit</a></td><td><a class='btn btn-danger btn-sm' href='delete?id=$id'>Delete</a></td></tr>";
    }
  }
    ?>
  </tbody>
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


