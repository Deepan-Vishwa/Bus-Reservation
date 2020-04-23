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



$sql = "INSERT INTO `booking` (`booking_id`, `user_id`, `bus_name`, `bus_id`, `no_of_seats`, `from`, `to`, `travel_date`, `bus_type`, `total_cost`, `cost_per_seat`)
 VALUES (NULL, '$userid1', '$busname1', '$busid1', '$noseats1', '$from1', '$to1', '$date1', '$bustype1', '$cpseat1', '$tprice1');";
 $sql2 ="UPDATE `date` SET `available_seats`= available_seats-$noseats1 WHERE date_ ='$date1' AND bus_id ='$busid1';";
if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)) {
    echo json_encode(array("statusCode"=>200));
} 
else {
    echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);


?>