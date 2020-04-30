<?php
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "qTVuzqyMJn"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}


$uname = mysqli_real_escape_string($con,$_POST['username']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$id=$_POST['username'];

if ($uname != "" && $password != ""){

    $sql_query = "select * from admin where email='".$uname."' and pw='".$password."'";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);



    if ($result->num_rows > 0) {
        
        $_SESSION["emailid"]=$row['email'];
        echo 1;
    }else{
        echo 0;
    }

}