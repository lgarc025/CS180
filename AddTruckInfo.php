<html>
<body>

<?php
$servername = "luis.cylcbbatmizc.us-west-2.rds.amazonaws.com";
$username = "Luis";
$password = "Luis1234";
$dbname = "LuisTrucking";



$Driver = $_COOKIE[uname];
$TruckID = $_POST["truckid"];
$TruckType = $_POST["trucktype"];


echo $TruckID;
echo $TruckType;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Run Query to authenticate User
$sql = " INSERT INTO Truck (TruckID, TruckType) VALUES ('$TruckID', '$TruckType')";


if(!mysqli_query($conn,$sql))
{
		echo "Failure";
}
else
{
		//echo $sql;
		echo "All Good adding Driver";
}


?>

</body>
</html>
