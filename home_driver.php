<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Luis Trucking - Sign In </title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/styleDisplayDriverData.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load Charts and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart for Sarah's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(drawSarahChart);

      // Draw the pie chart for the Anthony's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(drawAnthonyChart);

	  google.charts.setOnLoadCallback(drawDriverChart);
	  google.charts.setOnLoadCallback(drawTruckChart);
	
      // Callback that draws the pie chart for Sarah's pizza.
      function drawSarahChart() {

        // Create the data table for Sarah's pizza.
        //var data = new google.visualization.DataTable();
		var jsonData = $.ajax({
				url: "getData.php",
				dataType: "json",
				async: false
				}).responseText;

		var data = new google.visualization.DataTable(jsonData);

        //data.addColumn('string', 'Topping');
        //data.addColumn('number', 'Slices');
        //data.addRows([
        //  ['Mushrooms', 1],
        //  ['Onions', 1],
        //  ['Olives', 2],
        //  ['Zucchini', 2],
        //  ['Pepperoni', 1]
        //]);

        // Set options for Sarah's pie chart.
        var options = {title:'Year To Date: Expenses',
                       width:500,
                       height:300,
					   is3D: true,
					   //slices: {3: {offset: 0.3}},
					  };

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('Sarah_chart_div'));
        chart.draw(data, options);
      }

      // Callback that draws the pie chart for Anthony's pizza.
      function drawAnthonyChart() {
        
		var jsonData = $.ajax({
			url: "getDataBrokers.php",
			dataType: "json",
			async: false
			}).responseText;

		var data = new google.visualization.DataTable(jsonData);

		//var temp = " <?php require ('./GetChartData.php'); ?>";
        // Create the data table for Anthony's pizza.
        //var data = new google.visualization.DataTable();
		//var point_one = 'Mushrooms';
		//var one_val = 2;
		var slice_val = 2; // does not seem to work in the slices
		var slice_offset = 0.2;
        //data.addColumn('string', 'Topping');
        //data.addColumn('number', 'Slices');
        //data.addRows([
        //  [point_one, one_val],

       // ]);

        // Set options for Anthony's pie chart.
        var options = {title:'Year To Date: Revenue By Broker',
                       width:500,
                       height:300,
					   is3D: true,
					   //slices: {2 :{offset: slice_offset}},
					  };

        // Instantiate and draw the chart for Anthony's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('Anthony_chart_div'));
        chart.draw(data, options);
      }

	  function drawDriverChart() {
		var jsonData = $.ajax({
				url:"getDataDrivers.php",
				dataType:"json",
				async:false
			}).responseText;

		var data = new google.visualization.DataTable(jsonData);

		var options = {title:'Year To Date: Revenue By Driver',
					   width:500,
					   height:300,
					  }

		var chart = new google.visualization.ColumnChart(document.getElementById('Driver_chart'));
		chart.draw(data, options);
	  }

	  function drawTruckChart() {
		var jsonData = $.ajax({
				url:"getDataTrucks.php",
				dataType:"json",
				async:false
			}).responseText;
		
		var data = new google.visualization.DataTable(jsonData);

		var options = {title:'Year To Date: Revenue By Truck',
					   width:500,
					   height:300,
					  }

		var chart = new google.visualization.ColumnChart(document.getElementById('Truck_chart'));
		chart.draw(data, options);
	  }
	
    </script>



<style>

body {margin:0;}
.header{
	background-color:#333;
	overflow-y:hidden;
	font-family:'Roboto Slab', serif;
	font-size:16px;
	position: relative;
}

.header-wrapper{
	width:100%;
	margin: 0 auto;
	text-align: left;
	position: fixed;
	z-index: 99;
}

.header ul{
	background-color:#333;
	list-style-type:none;
	padding: 0;
	margin: 0;
	top: 0;
	position: relative;
	z-index: 101;
}

.header ul li{
	display:inline-block;
	color: white;
}

.header ul li:hover{
	background-color: #888;
}

.header ul li a,visited{
	color: white;
	display:block;
	padding: 16px;
	text-decoration: none;
}

.header ul li a:hover{
	color: white;
	text-decoration: none;
}

.header ul li:hover ul{
	display: block;
}

.header ul ul{
	display: none;
	position: absolute;
	top: 53px;
	z-index:1000;
}

.header ul ul li{
	display: block;
}

.active {
	background-color:#999;
}

</style>
</head>
<body>
<div class="header">
	<div class="header-wrapper">
	<ul>
	<li><a class="active" href="home_driver.php">Home</a></li><li>
		<li><a href="#tic">Tickets</a>
			<ul>
			<li><a href="/DriverAddTicket.php">Add Tickets</a></li>
				<li><a href="/DriverRemoveTicket.php">Remove Tickets</a></li>
			</ul></li><li>
		<a  href="#exp">Expenses</a>
			<ul>
				<li><a href="/DriverAddExpense.php">Add Expense</a></li>
   			 <li><a href=/DriverRemoveExpense.php>Remove Expense</a></li>
			</ul></li><li>
			<a href="#rep">Reports</a>
			<ul>
				<li><a href="/DisplayDriverTicket.php">Pay Report</a></li>
			</ul></li><li>
			<a href="#acc">Account</a>
			<ul>
				<li><a href="/ChangeDriverPassword.php">Change Password</a></li>
			</ul></li>
		<li style = "float:right"><a href="logout.php">Logout</a></li>
		<li style = "float:right; color:#FFF; background-color:#333; padding: 14px 16px;"><?php echo "Welcome, "; echo $_COOKIE[uname]."!"; ?></li>
	</ul>
	</div>
</div>


<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo"><br/> </h1>
		</div>
		<div class="ticket-box animated fadeInUp">
			<div class="box-header">
				<h2> Earnings at a Glance </h2>
			</div>

    <!--Table and divs that hold the pie charts-->
    <table class="columns" align="center">
      <tr>
        <td><div id="Sarah_chart_div" style="border: 1px solid #ccc"></div></td>
	  </tr>
    </table>

	</div>
</div>

</body>

<script>
	$(document).ready(function () {
	$('#logo').addClass('animated fadeInDown');
	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
