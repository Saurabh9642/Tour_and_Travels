<?php
            error_reporting(0);
            $severname = 'localhost';
            $username = 'root';
            $password = "Mangal@2848";
            $dbname = 'tour_and_travels';
     
            $connection=new mysqli($severname,$username,$password,$dbname);
            if($connection->connect_error)
            {
                  die("Connection Fail.....". $connection->connect_error);
            }
            
?>