<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'qTVuzqyMJn';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(! $conn ) {
   die('Could not connect: ' . mysqli_error());
}

$code=$_POST['code'];
$cpass=$_POST['cpass'];
if(!empty($code))
{

$sql=mysqli_query($conn,"SELECT * FROM db WHERE fcode='$code'");
$num=mysqli_fetch_array($sql);
if($num>0)
{

$result1=mysqli_query($conn,"UPDATE db SET pw='$cpass' WHERE fcode='$code'");
echo 1;

}
else
{
echo 0 ;
}
}
?>