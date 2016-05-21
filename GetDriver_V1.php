<?php

	function get_driver()
	{
			$str='';
			$str=$_POST['std'];
			$names = get_data_driver($std);

			foreach ($names as $name)
			{
					$str.='<option value="'.$name.'">'.$name.'</option>';
			}

			return $str;
	}

	function get_data_driver ($std)
	{
			
			 //Create a Broker Array
			 $Brokers=array();

			 $servername = "luis.cylcbbatmizc.us-west-2.rds.amazonaws.com";
			 $username = "Luis";
			 $password = "Luis1234";
$dbname = $_COOKIE[db];
			
			 $conn = new mysqli($servername, $username, $password, $dbname);
			 $sql = "SELECT DriverName FROM Driver Where PayRate != 0 and IsAdmin = 0";
			 $result = $conn->query($sql);

			 while($row = $result->fetch_assoc())
			 {
					 //Load an Array wih the brokers
					 $Brokers[] = $row[DriverName];
			 }

			 return $Brokers;
	}

	echo get_driver();

?>
