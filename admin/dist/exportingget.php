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

$sql = "SELECT *FROM `booking`";
$result = $conn->query($sql);
extract($_POST);
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'qTVuzqyMJn';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(! $conn ) {
   die('Could not connect: ' . mysqli_error());
}

$sql = "SELECT *FROM `booking` WHERE bus_id='$busid' AND travel_date='$td'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
while($row = $result->fetch_assoc()) {
    

    echo "<tr>
    <td>".$row["booking_id"]."</td>
    <td>".$row["user_id"]."</td>
    <td>".$row["no_of_seats"]."</td>
    <td>".$row["from"]."</td>
    <td>".$row["to"]."</td>
   </tr>";
    
                            

                        
                           
                          
                            
}



}
else { 
    echo "No Bookings"; 
}
$conn->close();
?>

