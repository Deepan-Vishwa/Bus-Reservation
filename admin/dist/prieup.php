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



$sql = "UPDATE `busses` SET `price`='$pri' WHERE bus_id='$bid'";
if (mysqli_query($conn, $sql)) {
    echo json_encode(array("statusCode"=>200));
} 
else {
    echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);


?>