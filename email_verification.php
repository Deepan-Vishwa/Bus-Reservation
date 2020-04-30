<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'qTVuzqyMJn';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(! $conn ) {
   die('Could not connect: ' . mysqli_error());
}

if(!empty($_POST['code']) && isset($_POST['code']))
{
$code=$_POST['code'];
$sql=mysqli_query($conn,"SELECT * FROM db WHERE activationcode='$code'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
$st=0;
$result =mysqli_query($conn,"SELECT * FROM db WHERE activationcode='$code' and status='$st'");
if(mysqli_num_rows($result)==1)
 {
$st=1;
$result1=mysqli_query($conn,"UPDATE db SET status='$st' WHERE activationcode='$code'");
$msg="Your account is activated";
echo 1;
}
else
{
$msg ="Your account is already active, no need to activate again";
echo 2 ;
}
}
else
{
$msg ="Wrong activation code.";
echo 3 ;
}
}
?>