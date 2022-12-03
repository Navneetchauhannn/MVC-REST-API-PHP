<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../public/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
</head>
<body>

<nav class='navbar navbar-expand-lg py-1 navbar-light bg-light'>
  <a class='navbar-brand' href='home.php'><i class="bi bi-collection-fill mr-1"></i>Teams</a>
  <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
    <span class='navbar-toggler-icon'></span>
  </button>

  <div class='collapse navbar-collapse' id='navbarSupportedContent'>
    <ul class='navbar-nav ml-auto'>
      <?php
        if(isset($_SESSION["enrollment"])) {
          echo "<li class='nav-item active'>
          <a  class='nav-link' href='home'>Home <span class='sr-only'>(current)</span></a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='createTeam'>Create Team</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='users'>Users</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='profile'>Me</a>
        </li>
        <li class='nav-item'>
          <a class='btn btn-primary btn-sm' class='nav-link' href='logout'>LogOut</a>
        </li>";
        } else {
          echo "<li class='nav-item'>
          <a class='btn btn-outline-primary btn-sm' class='nav-link' href='login'>Log In</a>
          <a  class='btn btn-primary btn-sm' class='nav-link' href='register'>SignUp</a>
        </li>";
        }
      ?>
    </ul>
  </div>
</nav>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>
</html>