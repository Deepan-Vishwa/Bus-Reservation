
<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

if (!isset($_SESSION["login"])) {
    header('Location: index.html');
    exit();
}
?>
<html>
    <head>
        <title>Bus Reservation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">
        <link href="animation.css" rel="stylesheet" type="text/css">
        <link href="booking.css" rel="stylesheet" type="text/css">

        <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    




        
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
                  <a class="nav-link" href="main_page.php">Home </a>
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
                    <a class="dropdown-item" href="logout.php">Log Out</a>
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
          position:fixed;">
           
          
           <?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'qTVuzqyMJn';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(! $conn ) {
   die('Could not connect: ' . mysqli_error());
}
$u=$_SESSION["login"];
$sql ="SELECT * FROM `db` WHERE email='$u'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    
  echo '<div class="card text-white bg-primary mb-3" style="max-width: 27rem; max-height: 15rem; margin-top:30px ">
  <div class="card-header">Your Details</div>
  <div class="card-body bg-danger">
    
    <p class="card-text">First Name : '.$row["fname"].'</p>
    <p class="card-text">Last Name : '.$row["lname"].'</p>
    <p class="card-text">Email ID : '.$row["email"].'</p>
  </div>
</div>';
    
                            

                        
                           
                          
                            
}




}
else { 
    echo "No Records"; 
}
$conn->close();
?>
            
           
          
          


           
</div>







    </body>
    </html>