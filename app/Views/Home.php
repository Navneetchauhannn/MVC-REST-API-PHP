<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>

  <table class="table" >
  <thead>
    <tr>
    <th scope="col">Name</th>
    <th scope="col">Enrollment</th>
      <th scope="col">Phone</th>
      <th scope="col">Semester</th>
      <th scope="col">Department</th>
      <th scope="col">Event Name</th>
      <th scope="col">Problem Statement</th>
      <th scope="col">Members Required</th>
      <th scope="col">My Skills</th>
    </tr>
  </thead>
  <tbody>
  <?php
     foreach($homeData as $home) {
        echo "<tr><td>$home[name]</td><td>$home[enrollment]</td><td>$home[phone]</td><td>$home[semester]</td><td>$home[department]</td><td>$home[eventname]</td><td>$home[prblmsmt]</td><td>$home[mrequired]</td><td>$home[skills]</td></tr>";
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