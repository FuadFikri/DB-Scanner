<?php

    class database{
        protected $servername;
        protected $username;
        protected $password;
        protected $dbname;

        
        public function scanMySQL($servername,$username,$password,$dbname)
        {
            $conn = new mysqli($servername, $username, $password, $dbname);
        }

    }
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "invoice";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


?>