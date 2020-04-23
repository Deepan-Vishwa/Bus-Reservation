
<?php
session_start();
?>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bus Reservation</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link href="animation.css" rel="stylesheet" type="text/css">
        <link href="result.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
            <a class="navbar-brand" href="#"><img src="logo.png" style="height: 30px; padding-left: 20px;"></a>
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
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="logout.php">Log Out</a>
                  </div>
                </li>
                <li class="nav-item" style="padding-right: 5px;">
                    <a class="nav-link" href="help.php">Help</a>
                  </li>
                  <li class="nav-item" style="padding-right: 5px;">
                    <a class="nav-link" href="faq.php">FAQ</a>
                  </li>
               
              </ul>
            </div>
          </nav>
          <div style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(back2.jpg);height: 100%;width: 100%;background-size: cover;background-position: center; display:flex;
          justify-content:center;
          align-items:center;position:fixed;">
          <div class="container" style="max-width: 100%;">
            
                <div class="card animation a1 " style="overflow-y: auto;max-height: 600px;">
                    <div class="card-header bg-danger " style="background-color:#454d55; color: white;" >
                      Your Resuts
                    </div>
                    <div class="card-body " style="background-color:lightyellow; overflow-y: auto;max-height: 600px;">
                      <h5 class="card-title">Happy Journey</h5>
                      <table class="table table-dark table-hover">
                        <thead>
                          <tr>
                          
                            <th scope="col">BUS NAME</th>
                            <th scope="col">BUS TYPE</th>
                            <th scope="col">Departure Time</th>
                            <th scope="col">Arrival Time</th>
                          
                            <th scope="col">Availabel seats</th>
                            <th scope="col">Total Seats</th>
                            <th scope="col">Price</th>
                          </tr>
                        </thead>
                        <tbody>
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
$sql = "SELECT b.bus_id,bus_name,route,time,bus_type,total_seats,price,date_,available_seats FROM busses b
inner join date d
on b.bus_id=d.bus_id
where b.route like '%$from%$to%'
and d.date_='$date'
and d.available_seats>0";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    $stops= explode(";",$row["route"]);
    $times= explode(";",$row["time"]);
    $entry = array_search($from, $stops);
	  $exit = array_search($to, $stops);

    echo "<tr>" ;
  
    echo "<td>".$row["bus_name"]."</td>";
    echo " <td>".$row["bus_type"]."</td>";

    $i=$entry;
		
	 	while ($i <= $exit) {
	 		$time[]=$times[$i];
	 		$i++;
		 }
		 echo "<td>".$time[0]."</td>";
		 echo "<td>".end($time)."</td>";
    



    

                               


            
                            echo "<td>".$row["available_seats"]."</td>";
                            echo "<td>".$row["total_seats"]."</td>" ;
                            echo "<td>Rs.".$row["price"]."</td>";
                            echo "<td align=\"right\">
                            <form action=\"booking.php\" method=\"POST\">
                            <button id=\"btn".$row["bus_id"]."\" class=\"btn btn-primary\">BOOK</button>
                            <input type=\"hidden\" name=\"busid\" value=\"".$row["bus_id"]."\">
                            <input type=\"hidden\" name=\"busname\" value=\"".$row["bus_name"]."\">
                            <input type=\"hidden\" name=\"price\" value=\"".$row["price"]."\">
                            <input type=\"hidden\" name=\"user\" value=\"".$_SESSION["login"]."\">
                            <input type=\"hidden\" name=\"btype\" value=\"".$row["bus_type"]."\">
                            <input type=\"hidden\" name=\"bfrom\" value=\"".$from."\">
                            <input type=\"hidden\" name=\"bto\" value=\"".$to."\">
                            <input type=\"hidden\" name=\"bdate\" value=\"".$date."\">
                            <input type=\"hidden\" name=\"bdtime\" value=\"".$time[0]."\">
                            <input type=\"hidden\" name=\"batime\" value=\"".end($time)."\">
                            
                            </form>
                            
                            </td></tr>";

                        
                           
                          
                            
}


echo "</table> </tbody>
</table>
</div>

</div>
</div>";

}
else { 
    echo "No Busses Available on that day"; 
}
$conn->close();
?>
</div>
</body>
</html>