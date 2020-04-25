<?php
session_start();
header('Content-Type: application/json');
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


if ($uname != ""){

    $sql_query = "select count(*) as cntUser from db where email='".$uname."' and status=1";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
      $activationcode=md5($uname.time());
      $resultss=mysqli_query($con,"UPDATE db SET fcode='$activationcode' WHERE email='$uname'");


        $headers = "MIME-Version: 1.0"."\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
            $headers .= 'From:Deepan Vishwa'."\r\n";
        
        mail($uname,"Bus-Reservation Password Recovery","<html></body><div><div>Dear user,</div></br></br>
        <div style='padding-top:8px;'>Please click The following link To Reset Your Password</div>
        <div style='padding-top:10px;'><a href='http://localhost/Bus-Reservation/newpass.html?code=$activationcode'>Click Here</a></div>
        <div style='padding-top:4px;'>Thank you!</a></div></div>
        </body></html>",$headers);
              
           print json_encode(array('message' => 'Email successfully sent!, Click the link on Your mail to Reset the Password', 'code' => 1));
           
            exit();
    }
    else{
        print json_encode(array('message' => 'Sorry You are Not a Member of this site!!', 'code' => 0));
  exit();
    }
    

}