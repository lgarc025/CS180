<?php
$servername = "luis.cylcbbatmizc.us-west-2.rds.amazonaws.com";
$username = "Luis";
$password = "Luis1234";
$dbname = "LuisTrucking";

$user =$_COOKIE[uname];
$start = $_POST["startdate"];
$end = $_POST["enddate"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//Run Query to authenticate User
$sql = "SELECT * FROM Ticket Where TicketDate Between '$start' and '$end' and DriverName ='$user'  ORDER BY TicketDate DESC";
$result = $conn->query($sql);
$sum = "SELECT SUM(Total) FROM Ticket Where TicketDate Between '$start' and '$end' and DriverName ='$user'";
$sumresult = $conn->query($sum);
$rowsum = $sumresult->fetch_assoc();
$rate = "SELECT PayRate From Driver Where DriverName='$user'";
$rateresult = $conn->query($rate);
$rowresult = $rateresult->fetch_assoc();
$PayRate = $rowresult[PayRate];

$DriverTotal = ($PayRate * $rowsum['SUM(Total)'])/100;

echo "From: $start to $end for $user ";
echo "<table id='t01' class='center'>"; // start a table tag in the HTML
echo "<tr> <th>TicketID</th> <th>Date</th> <th>TruckID</th> <th>Hauler</th> <th>Broker</th> <th>Rate</th> <th>Tons/Hours</th> <th>Total</th> <th>Approval</th>  </tr> ";

while($row = $result->fetch_assoc())
{
		$Approval = "Approved";
		if ($row['Approval'] == 0 )
		{
				$Approval="Not Approved";

		}
		echo "<tr><td>" . $row['TicketID'] . "</td><td>" . $row['TicketDate']  . "</td><td>" . $row['TruckID'] . "</td><td>" . $row['HaulerName'] . "</td><td>" . $row['BrokerName'] . "</td><td>" ."$" .$row['Rate'] . "</td><td>" . $row['Amount'] . "</td><td>" ." $". $row['Total'] . "</td><td>". "$Approval" ."</td></tr>";
		//$row['index'] the index here is a field name

}

echo "<tr> <td colspan='9' style='text-align:center' > Truck Total: $".$rowsum['SUM(Total)']." </td> </tr> ";
echo "<tr> <td colspan='9' style='text-align:center' > DriverTotal: $".$DriverTotal." @ ".$PayRate."% </td> </tr> ";
$conn->close();
echo "</table>"; //Close the table

?>
