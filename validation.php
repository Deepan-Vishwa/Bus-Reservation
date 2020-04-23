<?php
 session_start();
extract($_POST);
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'qTVuzqyMJn';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
         
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         echo "connected";

if(isset($submit))
{
	$rs=mysqli_query($conn,"select * from db where email='$username' and pw='$password' and status=1");
	if(mysqli_num_rows($rs)<1)
	{
        $found="N";
        echo "invalid";
	}
	else
	{
                session_start();
		$_SESSION["login"]=$username;
	}
}
if (isset($_SESSION["login"]))
{

        header("location: main_page.php");
//echo "<h1 align=center>Hye you are sucessfully login!!!</h1>";
//exit;
}
mysqli_close($conn);
?>