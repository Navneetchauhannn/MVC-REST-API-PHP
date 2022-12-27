<?php

    date_default_timezone_set('Asia/kolkata');
    require_once('Models/Model.php');
    session_start();

    class Controller extends Model {
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        function __construct() {
            parent::__construct();
            $baseDir = basename(__FILE__); 
            $location = substr($_SERVER['PHP_SELF'], strpos($_SERVER['PHP_SELF'], $baseDir) + strlen($baseDir));
            if($location) {
                switch($location) {
                    case 'ct/app/index.php/':
                      if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $enrollment = $_POST["enrollment"];
                        $password = $_POST["password"];
                        
                        $res = $this->userLogin($enrollment, $password);
                        if($res['Code']==1) {
                          $_SESSION["name"]=$res['Data']['name'];
                          $_SESSION["enrollment"]=$res['Data']['enrollment'];
                          $_SESSION["semester"]=$res['Data']['semester'];
                          $_SESSION["phone"]=$res['Data']['phone'];
                          $_SESSION["department"]=$res['Data']['department'];
                          $_SESSION["skills"]=$res['Data']['skills'];
                          ?>
                          <script type="text/javascript">
                            window.location.href = "home";
                          </script>
                          <?php
                        } else {
                          ?>
                          <script type="text/javascript">
                            window.location.href = "login";
                          </script>
                          <?php
                        }
                      }
                      include 'Views/Navbar.php';
                      include 'Views/index.php';
                      break;

                      case 'ct/app/index.php/login':
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                          $enrollment = $_POST["enrollment"];
                          $password = $_POST["password"];
                          
                          $res = $this->userLogin($enrollment, $password);
                          if($res['Code']==1) {
                            $_SESSION["name"]=$res['Data']['name'];
                            $_SESSION["enrollment"]=$res['Data']['enrollment'];
                            $_SESSION["semester"]=$res['Data']['semester'];
                            $_SESSION["phone"]=$res['Data']['phone'];
                            $_SESSION["department"]=$res['Data']['department'];
                            $_SESSION["skills"]=$res['Data']['skills'];
                            ?>
                            <script type="text/javascript">
                              window.location.href = "home";
                            </script>
                            <?php
                          } else {
                            ?>
                            <script type="text/javascript">
                              window.location.href = "login";
                            </script>
                            <?php
                          }
                        }
                        include 'Views/Navbar.php';
                        include 'Views/index.php';
                        break;

                    case 'ct/app/index.php/register':
                      if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $formData = [
                          'enrollment' => $_POST["enrollment"],
                          'password' => $_POST["password"],
                          'skills' => $_POST["skills"],
                          'department' => $_POST["department"],
                          'semester' => $_POST["semester"],
                          'phone' => $_POST["phone"],
                          'name' => $_POST["name"]
                        ];
                        $res = $this->userSignUp($formData);
                        if($res['Code']==1) {
                          $_SESSION["name"]=$formData['name'];
                          $_SESSION["enrollment"]=$formData['enrollment'];
                          $_SESSION["semester"]=$formData['semester'];
                          $_SESSION["phone"]=$formData['phone'];
                          $_SESSION["department"]=$formData['department'];
                          $_SESSION["skills"]=$formData['skills'];

                          ?>
                            <script type="text/javascript">
                              window.location.href = "home";
                            </script>
                          <?php
                        } else {
                          ?>
                            <script type="text/javascript">
                              window.location.href = "register";
                            </script>
                            <?php
                        }
                      }

                      include 'Views/Navbar.php';
                      include 'Views/SignUp.php';
                      break;

                    case 'ct/app/index.php/home':

                      if(!isset($_SESSION['enrollment'])) {
                        ?>
                        <script type="text/javascript">
                          window.location.href = "login";
                        </script>
                      <?php
                      exit;
                      }

                      include 'Views/Navbar.php';
                      $res = $this->home();
                      $homeData = $res['Data'];
                      include 'Views/Home.php';
                      break;

                    case 'ct/app/index.php/users':
                      include 'Views/Navbar.php';
                      $res = $this->getUsers();
                      $userData = $res['Data'];
                      include 'Views/Users.php';
                      break;

                    case 'ct/app/index.php/profile':
                      include 'Views/Navbar.php';
                      if(isset($_SESSION['enrollment'])) {
                        $enrollment=$_SESSION['enrollment'];
                        $res = $this->profile($enrollment);
                        
                        $profileData = $res['Data'];
                        include 'Views/Profile.php';
                      } else {
                        ?>
                          <script type="text/javascript">
                            window.location.href = "login";
                          </script>
                        <?php
                      }                       
                        break;
                    
                      case 'ct/app/index.php/logout':
                        if(!isset($_SESSION['enrollment'])) {
                          ?>
                          <script type="text/javascript">
                            window.location.href = "login";
                          </script>
                        <?php
                        exit;
                        }
                        session_unset();
                        session_destroy();
                        ?>
                          <script type="text/javascript">
                            window.location.href = "login";
                          </script>
                        <?php
                        break;
                    
                        case 'ct/app/index.php/createTeam':
                          if(!isset($_SESSION['enrollment'])) {
                            ?>
                            <script type="text/javascript">
                              window.location.href = "login";
                            </script>
                          <?php
                          exit;
                          }
                          
                          if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $formData = [
                              'eventname' => $_POST["eventname"],
                              'mrequired' => $_POST["mrequired"],
                              'prblmsmt' => $_POST["prblmsmt"],
                              'name' => $_SESSION['name'],
                              'skills' => $_SESSION['skills'],
                              'department' => $_SESSION['department'],
                              'semester' => $_SESSION['semester'],
                              'phone' => $_SESSION['phone'],
                              'enrollment' => $_SESSION['enrollment']
                            ];
                            $res = $this->createTeam($formData);

                            if($res['Code']==1) {
                              ?>
                            <script type="text/javascript">
                              window.location.href = "home";
                            </script>
                            <?php
                            } else {
                              ?>
                            <script type="text/javascript">
                              window.location.href = "createTeam";
                            </script>
                            <?php
                            }
                          }
                          include 'Views/Navbar.php';
                            include 'Views/CreateTeam.php';
                            
                          break;
                  case 'ct/app/index.php/delete':
                    $teamid="";
                    if(isset($_GET['id'])) {
                      $teamid=$_GET['id'];
                      $res = $this->deleteData($teamid);
                      if($res['Code']==1) {
                        ?>
                      <script type="text/javascript">
                        window.location.href = "profile";
                      </script>
                      <?php
                      } else {
                        echo "not Deleted";
                      }
                    } else {
                      ?>
                      <script type="text/javascript">
                        window.location.href = "profile";
                      </script>
                      <?php
                    }

                  case 'ct/app/index.php/update':
                    $teamid="";
                    if(isset($_GET['edit'])) {
                      $teamid=$_GET['edit'];
                    } else {
                      echo "not get";
                      ?>
                      <script type="text/javascript">
                        window.location.href = "profile";
                      </script>
                      <?php
                    }
                    $res = $this->home($teamid);
                    $homeData = $res['Data'];
                    

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                      $formData = [
                        'eventname' => $_POST["eventname"],
                        'mrequired' => $_POST["mrequired"],
                        'prblmsmt' => $_POST["prblmsmt"]
                      ];
                      
                      if(!empty($_POST["eventname"]) && !empty($_POST["mrequired"]) && !empty($_POST["prblmsmt"])) {
                       $res = $this->updateData($formData, $teamid);
                       if($res['Code']==1) {
                        ?>
                      <script type="text/javascript">
                        window.location.href = "profile";
                      </script>
                      <?php
                      } else {
                        ?>
                      <script type="text/javascript">
                        window.location.href = "createTeam";
                      </script>
                      <?php
                      }
                      } else {
                        echo "Fill Data Properly";
                      }                      
                    }
                    include 'Views/Navbar.php';
                    include 'Views/Update.php';
                    break;
                  default:
                }
            } else {
                echo "no";
            }
        }
    }

    $obj = new Controller();
?>