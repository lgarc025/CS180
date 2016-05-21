<html>
<body>
<?php
$servername = "luis.cylcbbatmizc.us-west-2.rds.amazonaws.com";
$username = "Luis";
$password = "Luis1234";
$dbname = "Master";
$newcompany = $_POST['company'];
$newcompany1 = str_replace(' ', '_', $newcompany);

$password2 = $_POST['password'];
$password1 = $_POST['password1'];
$name = $_POST['name'];
$username1 = $_POST['username'];
$rate = $_POST['rate'];

if ( $password2 != $password1 || strlen($name) == 0 || strlen($username) == 0 || strlen($rate) == 0 || $rate >= 100 || $rate < 0 )
{

		header('Location: http://www.luistrucking.com/CreateNewCompany_error.php');
		return;
}

$conn = new mysqli($servername, $username, $password, 'Master');
$sql = "INSERT INTO CompanyList ( CompanyName, DatabaseName ) VALUES ('$newcompany','$newcompany1')";
echo $sql;
$result = $conn->query($sql);

if ($result == false)
{

		//header('Location: http://www.luistrucking.com/CreateNewCompany_errorw.php');
		//return;
}

$conn->close();

//Create New DB Instance
$conn = new mysqli($servername, $username, $password);
$sql = "CREATE DATABASE $newcompany1";
echo $sql;
$result = $conn->query($sql);

if ($result == false)
{
		header('Location: http://www.luistrucking.com/CreateNewCompany_error.php');
		return;
}

//Connect to new database
$dbname = $newcompany1;
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "CREATE TABLE Driver ( DriverName CHAR(50), login CHAR(50), password char(50) NOT NULL,
PayRate Real, IsAdmin Bool, Primary Key(DriverName))";
$result = $conn->query($sql);

$sql = "CREATE TABLE Truck (TruckID CHAR(10), TruckType Char(50), Primary Key(TruckID))";
$result = $conn->query($sql);

$sql = "CREATE TABLE Hauler (HaulerName CHAR(50), Primary Key(HaulerName))";
$result = $conn->query($sql);

$sql = "CREATE TABLE Vendor (VendorName CHAR(50), Primary Key(VendorName))";
$result = $conn->query($sql);

$sql = "CREATE TABLE ExpenseType (ExpenseTypeName CHAR(50), Primary Key(ExpenseTypeName))";
$result = $conn->query($sql);

$sql = "CREATE TABLE Broker (BrokerName CHAR(50), BrokerFee integer, Primary Key(BrokerName))";
$result = $conn->query($sql);

$sql = "CREATE TABLE ExpenseType (ExpenseTypeName CHAR(50), Primary Key(ExpenseTypeName))";
$result = $conn->query($sql);

$sql = "CREATE TABLE Ticket (TicketID CHAR(50) NOT NULL, TicketDate DATE, Rate REAL NOT NULL, Amount Real NOT NULL, Total Real, DriverName CHAR(50) NOT NULL, TruckID CHAR(10) NOT NULL, BrokerName CHAR(50) NOT NULL, Approval BOOLEAN, Paid BOOLEAN, HaulerName CHAR(50) NOT NULL, FOREIGN KEY (HaulerName) REFERENCES Hauler(HaulerName), FOREIGN KEY (DriverName) REFERENCES Driver(DriverName), FOREIGN KEY (TruckID) REFERENCES Truck(TruckID), FOREIGN KEY (BrokerName) REFERENCES Broker(BrokerName), Primary Key(TicketID))";
$result = $conn->query($sql);

$sql = "CREATE TABLE Expense (ExpenseID Serial, ExpenseDate DATE NOT NULL, ExpenseType CHAR(50) NOT NULL, VendorName CHAR(50), Amount REAL NOT NULL, DriverName CHAR(50), TruckID CHAR(10), Details CHAR (100) NOT NULL, Approve BOOL, FOREIGN KEY (DriverName) REFERENCES Driver(DriverName),FOREIGN KEY (TruckID) REFERENCES Truck(TruckID), FOREIGN KEY (ExpenseType) REFERENCES ExpenseType(ExpenseTypeName),  FOREIGN KEY (VendorName) REFERENCES Vendor(VendorName ),Primary Key (ExpenseID))";
$result = $conn->query($sql);


$password = $_POST['password'];
$password1 = $_POST['password1'];

$sql = "INSERT INTO Driver ( DriverName, login, password, PayRate, IsAdmin) VALUES ('$name', '$username1', '$password', '$rate', '1')";
$result = $conn->query($sql);

$conn->close();


		header('Location: http://www.luistrucking.com/CreateNewCompany_okay.html');

?><br>

</body>
</html>
