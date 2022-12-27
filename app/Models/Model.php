<?php
class Model {
    protected $connection = "";
    protected $servername="localhost";
    protected $username="root";
    protected $password=""; // your mysql database password
    protected $dbname=""; // database name

    // connecting with database
    function __construct() {
        mysqli_report(MYSQLI_REPORT_STRICT);
        try {
            $this->connection = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        } catch(Exception $e) {
            echo "Connection to database is failed".$e->getMessage();
            exit;
        }
    }

    // utilites for the database

    function userLogin($enrollment, $password) {
        if(!empty($enrollment) && !empty($password)) {
            $res = $this->connection->query("SELECT * FROM USERS WHERE enrollment=$enrollment");
            if($res->num_rows>0) {
              $row = $res->fetch_assoc();
              if($row['password']===$password) {
                $response['Data'] = $row;
                $response['Code'] = true;
                $response['Message'] = "sucess";
              } else {
                $response['Data'] = null;
                $response['Code'] = false;
                $response['Message'] = "Invalid Credential";
              }
            }else {
                $response['Data'] = null;
                $response['Code'] = false;
                $response['Message'] = "User not exists";
            }
        }
        return $response; 
    }

    function userSignUp($formData) {
      $name = $formData['name'];
      $enrollment = $formData['enrollment'];
      $phone = $formData['phone'];
      $semester = $formData['semester'];
      $department = $formData['department'];
      $password = $formData['password'];
      $skills = $formData['skills'];

      if(!empty($name) && !empty($semester) && !empty($enrollment) && !empty($phone) 
      && !empty($department) && !empty($skills) 
      && !empty($password)) {
          $res = $this->connection->query("INSERT INTO USERS (name, enrollment, phone, semester, department, password, skills) VALUES ('$name', '$enrollment', '$phone', '$semester','$department','$password', '$skills')");
          if($res) {
              $response['Data'] = null;
              $response['Code'] = true;
              $response['Message'] = "sucess";
            } else {
              $response['Data'] = null;
              $response['Code'] = false;
              $response['Message'] = "Server Error";
            }
      }else {
              $response['Data'] = null;
              $response['Code'] = false;
              $response['Message'] = "Fill Data Properly";
      }
      return $response; 
    }

    function home($where = "") {
      if($where=="") {
        $q = "SELECT * FROM TEAMS JOIN USERS ON TEAMS.enrollment=USERS.enrollment";
      } else {
      $q = "SELECT * FROM TEAMS JOIN USERS ON TEAMS.enrollment=USERS.enrollment WHERE TEAMS.teamid=$where";
      }
      $res = $this->connection->query($q);
      $data=array();
      if($res->num_rows>0) {
        while($row = $res->fetch_assoc()) {
          array_push($data, $row);
        }
        $response['Data'] = $data;
        $response['Code'] = true;
        $response['Message'] = "sucess";
      } else {
        $response['Data'] = null;
        $response['Code'] = false;
        $response['Message'] = "reject";
      }

      return $response;
    }

    function getUsers() {
      $q = "SELECT * FROM USERS";
      $res = $this->connection->query($q);
      $data=array();
      if($res->num_rows>0) {
        while($row = $res->fetch_assoc()) {
          array_push($data, $row);
        }
        $response['Data'] = $data;
        $response['Code'] = true;
        $response['Message'] = "sucess";
      } else {
        $response['Data'] = null;
        $response['Code'] = false;
        $response['Message'] = "reject";
      }

      return $response;
    }

    function profile($enrollment) {
        $q = "SELECT * FROM TEAMS WHERE enrollment=$enrollment";
        $res = $this->connection->query($q);
        $data=array();
        if($res->num_rows>0) {
          while($row = $res->fetch_assoc()) {
            array_push($data, $row);
          }
          $response['Data'] = $data;
          $response['Code'] = true;
          $response['Message'] = "sucess";
      } else {
          $response['Data'] = null;
          $response['Code'] = false;
          $response['Message'] = "reject";
      }
      return $response;
    }

    function updateData($formData, $where) {
      $eventname = $formData['eventname'];
      $mrequired = $formData['mrequired'];
      $prblmsmt = $formData['prblmsmt'];
        $q = "UPDATE TEAMS SET prblmsmt='$prblmsmt', eventname='$eventname', mrequired='$mrequired' WHERE teamid=$where";
        $res = $this->connection->query($q);
          if($res) {
            $response['Data'] = null;
            $response['Code'] = true;
            $response['Message'] = "sucess";
          } else {
            $response['Data'] = null;
            $response['Code'] = false;
            $response['Message'] = "Server Error";
          }

          return $response;
    }

    function deleteData($where) {
      $q = "DELETE FROM TEAMS WHERE teamid=$where";
      $res = $this->connection->query($q);
      if($res) {
            $response['Data'] = null;
            $response['Code'] = true;
            $response['Message'] = "sucess";
          } else {
            $response['Data'] = null;
            $response['Code'] = false;
            $response['Message'] = "Server Error";
          }
          return $response;
    }

    function createTeam($formData) {
      $eventname = $formData['eventname'];
      $mrequired = $formData['mrequired'];
      $prblmsmt = $formData['prblmsmt'];
      $name = $formData['name'];
      $enrollment = $formData['enrollment'];
      $phone = $formData['phone'];
      $semester = $formData['semester'];
      $department = $formData['department'];
      $skills = $formData['skills'];

      if(!empty($eventname) && !empty($mrequired) && !empty($prblmsmt)) {
        $q = "INSERT INTO TEAMS (enrollment,prblmsmt,eventname,mrequired, phone) VALUES ('$enrollment', '$prblmsmt', '$eventname', '$mrequired', '$phone')";
          $res = $this->connection->query($q);
          if($res) {
            $response['Data'] = null;
            $response['Code'] = true;
            $response['Message'] = "sucess";
          } else {
            $response['Data'] = null;
            $response['Code'] = false;
            $response['Message'] = "Server Error";
          }
    }else {
            $response['Data'] = null;
            $response['Code'] = false;
            $response['Message'] = "Fill Data Properly";
    }
    return $response; 

      
    }
  }
?>