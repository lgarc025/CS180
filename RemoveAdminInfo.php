<html>
<body>

<?php
$servername = "luis.cylcbbatmizc.us-west-2.rds.amazonaws.com";
$username = "Luis";
$password = "Luis1234";
$dbname = $_COOKIE[db];



$Driver = $_POST["drivername"];

echo $User;
echo $Driver;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

//Run Query to authenticate User
$sql = "DELETE FROM Driver Where DriverName='$Driver'";

if(!mysqli_query($conn,$sql))
{
		
		header('Location: http://www.luistrucking.com/RemoveAdminError.php');
}
else
{
		header('Location: http://www.luistrucking.com/RemoveAdminOkay.php');
}



?>

</body>
</html>
