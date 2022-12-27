# Using PHP MVC REST API

Representational state transfer (REST) is a software architectural that seperates models, views and controller component and interconnectes them. it is a client-server architecture.

# Project Overview

This project is created for getting simple knowledge of php with MVC framework.

Project includes PHP as a backend language and MySql database.

Project includes email Authentication and CRUD operation on different records.

# Connecting to MySql using PHP

```php
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
}
```

# Calling Model components from Controller

```php
require_once('Models/Model.php');
session_start();

class Controller extends Model {
    function __construct() {
            parent::__construct();
            $baseDir = basename(__FILE__); 
            $location = substr($_SERVER['PHP_SELF'], strpos($_SERVER['PHP_SELF'], $baseDir) + strlen($baseDir));
            if($location) {
                switch($location) {
                    // cases ..
                }
            }
    }
}
```
