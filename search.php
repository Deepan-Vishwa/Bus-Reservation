<?php
extract($_POST);
$dbhost = 'remotemysql.com:3306';
         $dbuser = 'qTVuzqyMJn';
         $dbpass = 'XXGpDc37ro';
         $dbname = 'qTVuzqyMJn';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
         
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         echo "connected";
         
         