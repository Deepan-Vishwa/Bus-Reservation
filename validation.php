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

if ($uname != "" && $password != ""){

    $sql_query = "select count(*) as cntUser from db where email='".$uname."' and pw='".$password."' and status=1";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION["login"] = $uname;
        echo 1;
    }else{
        echo 0;
    }

}