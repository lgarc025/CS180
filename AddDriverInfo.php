<html>
<body>

<?php
$servername = "luis.cylcbbatmizc.us-west-2.rds.amazonaws.com";
$username = "Luis";
$password = "Luis1234";
$dbname = "LuisTrucking";



$Driver = $_COOKIE[uname];
$Name = $_POST["name"];
$Login = $_POST["login"];
$Password = $_POST["password"];
$PayRate = $_POST["payrate"];


echo $Name;
echo $Login;
echo $Password;
echo $PayRate;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Run Query to authenticate User
$sql = "INSERT INTO Driver ( DriverName, login, password, PayRate) VALUES ('$Name', '$Login', '$Password', '$PayRate')";


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
