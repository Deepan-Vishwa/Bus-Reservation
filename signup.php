<?php
extract($_POST);
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'qTVuzqyMJn';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
         $status=0;
         $activationcode=md5($email.time());
         
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         echo "connected";

         $sql = "INSERT INTO db (fname, lname, email, pw, status, activationcode)
         VALUES ('$firstname', '$lastname', '$email', '$password', '$status', '$activationcode')";
         
         if ($conn->query($sql) === TRUE) {
            $to=$email;
            $msg= "Thanks for new Registration.";
            $subject="Email verification";
            $headers .= "MIME-Version: 1.0"."\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
            $headers .= 'From:Deepan Vishwa'."\r\n";
            $ms.="<html></body><div><div>Dear $firstname,</div></br></br>";
            $ms.="<div style='padding-top:8px;'>Please click The following link For verifying and activation of your account</div>
            <div style='padding-top:10px;'><a href=' http://localhost/email_verification.php?code=$activationcode'>Click Here</a></div>
            <div style='padding-top:4px;'>Thank you!</a></div></div>
            </body></html>";
            mail($to,$subject,$ms,$headers);
            echo "<script>alert('Registration successful, please verify in the registered Email-Id');</script>";
            header ("location: email confir info.html");
         } else {
             echo "Error: " . $sql . "<br>" . $conn->error;
         }
mysqli_close($conn);
?>