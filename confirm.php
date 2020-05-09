
<?php
session_start();
extract($_POST);
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

if (!isset($_SESSION["login"])) {
    header('Location: index.html');
    exit();
}
?>
<html>
<head>

<title>bus reservation</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
        <link href="animation.css" rel="stylesheet" type="text/css">
        <script type = "text/javascript" >
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
<a class="navbar-brand" href="main_page.php" style="font-family: 'Parisienne', cursive;">DeepanVishwa</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item " style="padding-right: 5px;">
                  <a class="nav-link" href="main_page.php">Home</a>
                </li>
                <li class="nav-item" style="padding-right: 5px;">
                  <a class="nav-link" href="my_trips.php">My Trips</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    My Account
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="profile.php">Profile</a>
                    <a class="dropdown-item" href="#">Log Out</a>
                  </div>
                </li>
                <li class="nav-item" style="padding-right: 5px;">
                    <a class="nav-link" href="help.php">Help</a>
                  </li>
                  
               
              </ul>
            </div>
          </nav>
          <div style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(back2.jpg);height: 100%;width: 100%;background-size: cover;background-position: center; display:flex;
          justify-content:center;
          align-items:center;position:fixed;">
    



    </div>
<?php


extract($_POST);

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'qTVuzqyMJn';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
         
         
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
        

          
          if(isset($cbuser)){
           
            
         $sql = "INSERT INTO `booking` (`booking_id`, `user_id`, `bus_name`, `bus_id`, `no_of_seats`, `from`, `to`, `travel_date`, `bus_type`, `total_cost`, `cost_per_seat`)
          VALUES (NULL, '$cbuser', '$cbusname', '$cbusid', '$cbseat', '$cbfrom', '$cbto', '$cbdate', '$cbustype', '$cbprice', '$cbtoprice');";
          $sql2 ="UPDATE `date` SET `available_seats`= available_seats-$cbseat WHERE date_ ='$cbdate' AND bus_id ='$cbusid';";
          }
        
         if(isset($submit)){

         if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE) {

          
            
          echo "<div class=\"modal fade\" id=\"exampleModal2\" tabindex=\"-1\" role=\"dialog\" data-controls-modal=\"your_div_id\" data-backdrop=\"static\" data-keyboard=\"false\" aria-labelledby=\"exampleModalLabel2\" aria-hidden=\"true\">
          <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel2\">Status</h5>
               
              </div>
              <div class=\"modal-body\">
                Booking Sucessfull!!!!
                Check Your Mail For Booking details.
              </div>
              <div class=\"modal-footer\">
                
                <a type=\"button\" class=\"btn btn-primary\" href='main_page.php'>Go To HomePage</a>
              </div>
            </div>
          </div>
        </div>";
        

        echo '
        
        <script>
        $("#exampleModal2").modal("show");
        
        
        </script>';


          
          $headers = '';
          $ms =' ';
          $to=$cbuser;
          $msg= "Thanks for choosing US!!!.";
          $subject="Bus Ticket";
          $headers = "MIME-Version: 1.0"."\r\n";
          $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
          $headers .= 'From:Deepan Vishwa'."\r\n";
          $ms.="<html></body><div><div>Dear user,</div></br></br>";
          $ms.="<div style='padding-top:8px;'>Your Booking Details</div>
          <div style='padding-top:10px;'>Bus Name:".$cbusname."</div>
          <div style='padding-top:4px;'>Bus Type:".$cbustype."</div>
          <div style='padding-top:4px;'>From:".$cbfrom."</div>
          <div style='padding-top:4px;'>To:".$cbto."</div>
          <div style='padding-top:4px;'>Date:".$cbdate."</div>
          <div style='padding-top:4px;'>Boarding Time:".$cbdtime."</div>
          <div style='padding-top:4px;'>Arrival Time:".$cbatime."</div>
          <div style='padding-top:4px;'>Number Of Seats:".$cbseat."</div>
          <div style='padding-top:4px;'>Total Amount:Rs.".$cbtoprice."</div>
          <div style='padding-top:4px;'>Please be Availabel at boarding Point Before 30 min of Boarding time</div>
          <div style='padding-top:4px;'>Thank You!!!</div>
          </body></html>";
          mail($to,$subject,$ms,$headers);
          echo 1;
            
         } else {
          echo "<div class=\"modal fade\" id=\"exampleModal2\" tabindex=\"-1\" role=\"dialog\" data-controls-modal=\"your_div_id\" data-backdrop=\"static\" data-keyboard=\"false\" aria-labelledby=\"exampleModalLabel2\" aria-hidden=\"true\">
          <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel2\">Status</h5>
               
              </div>
              <div class=\"modal-body bg-danger text-white\">
               Sorry Error With Your Booking, Contact the Support.
              </div>
              <div class=\"modal-footer\">
                
                <a type=\"button\" class=\"btn btn-primary\" href='main_page.php'>Go To HomePage</a>
              </div>
            </div>
          </div>
        </div>";
        

        echo '
        
        <script>
        $("#exampleModal2").modal("show");
        
        
        </script>';
         }
        }
mysqli_close($conn);


?>








    </body>
    </html>