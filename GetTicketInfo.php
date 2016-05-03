<html>
<body>

<?php
$servername = "luis.cylcbbatmizc.us-west-2.rds.amazonaws.com";
$username = "Luis";
$password = "Luis1234";
$dbname = "LuisTrucking";



$User = $_COOKIE[login];
$Driver =$_COOKIE[uname];
$TruckID = $_POST["taskOption"];
$Hauler = $_POST["hauler"];
$Tons = $_POST["tons"];
$TicketID = $_POST["user"];
$PayRate =$_POST["payrate"];
$Broker =$_POST["broker"];
$Date =$_POST["date"];

echo $User;
echo $Broker;
echo $TruckID;
echo $Hauler;
echo $TicketID;
echo $Tons;
echo $PayRate;
echo $Date;
$Amount = $PayRate * $Tons;
echo $Driver; 

echo $Amount;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Run Query to authenticate User
$sql = "INSERT INTO Ticket (TicketID, TicketDate, Rate, Amount, Total, DriverName, TruckID, BrokerName, Approval, Paid, HaulerName) VALUES ('$TicketID', '$Date', '$PayRate','$Tons','$Amount', '$Driver', '$TruckID', '$Broker', FALSE, FALSE, '$Hauler')";

if(!mysqli_query($conn,$sql))
{
		echo "Failure";
}
else
{
		//echo $sql;
		echo "All Good adding Ticket";
}


?>

</body>
</html>
