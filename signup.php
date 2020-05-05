<?php
session_start();

$file = fopen("url.txt","r");
$size= filesize("url.txt");
$text = fread($file,$size);
fclose($file);
extract($_POST);
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


$uname = mysqli_real_escape_string($con,$email);


if ($uname != ""){
  

    $sql_query = "select count(*) as cntUser from db where email='".$uname."'";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count == 0){
     
      $activationcode=md5($uname.time());
      $resultss=mysqli_query($con,"INSERT INTO db (fname, lname, email, pw, status, activationcode)
      VALUES ('$fname', '$lname', '$email', '$cpass', 0 , '$activationcode')");


        $headers = "MIME-Version: 1.0"."\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
            $headers .= 'From:Deepan Vishwa'."\r\n";
        
        mail($uname,"Bus-Reservation Account Activation","<html></body><div><div>Dear user,</div></br></br>
        <div style='padding-top:8px;'>Please click The following link To Activate Your Account.</div>
        <div style='padding-top:10px;'><a href='$text/Bus-Reservation/emailconfirmation.html?code=$activationcode'>Click Here</a></div>
        <div style='padding-top:4px;'>Thank you!</a></div></div>
        </body></html>",$headers);
              
           print json_encode(array('message' => 'Email successfully sent!, Click the link on Your mail to Activate Your Account', 'code' => 1));
           
            exit();
    }
    else{
        print json_encode(array('message' => 'The Entered Email ID is Already Registerd.', 'code' => 0));
  exit();
    }
    

}
