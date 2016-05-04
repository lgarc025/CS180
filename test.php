<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Luis Trucking - Sign In </title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<style>
body {margin:0; z-index: -1;}




.header{

			background-color:#333;

				overflow-y:hidden;

					font-family:'Roboto Slab', serif;

						font-size:16px;
						z-index: 1000;
						position: relative;
}



.header-wrapper{

			width:100%;

				margin: 0 auto;

					text-align: left;

						position: fixed;

}



.header ul{

			background-color:#333;

				list-style-type:none;

					padding: 0;

						margin: 0;

							top: 0;

								position: relative;

}



.header ul li{

			display:inline-block;

			;	color: white;

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

					top: 35px;

}



.header ul ul li{

			display: block;

}


</style>
</head>
<body>
<div class="header">

	<div class="header-wrapper">
<ul>
    <li><a href="home.php">Home</a></li>



	<li><a href="#brk">Brokers</a>

	<ul>

	<li><a href="#brk">Add Broker</a></li>

	<li><a href="#brk">Remove Broker</a></li>


   	</ul></li><li>

    <a href="#drvr">Driver</a>

	<ul>

	<li><a href="#dr1">Add Driver</a></li>

	<li><a href="#dr2">Remove Driver</a></li>


  	</ul></li><li>

   <a href="#trk">Trucks</a></li><li>

	<ul>

	<li><a href="#dr1">Add Truck</a></li>

	<li><a href="#dr2">Remove Truck</a></li>


  	</ul></li><li>



 <a href="#ex">Expenses</a></li>

	<ul>

	<li><a href="#dr1">Add Vendor</a></li>

	<li><a href="#dr1">Remove Vendor</a></li>

	<li><a href="#dr2">Add Expense Type</a></li>

	<li><a href="#dr2">Remove Expense Type</a></li>


  	</ul></li><li>

 <li style = "float:right"><a href="luistrucking.html">Logout</a></li>

 <li style = "float:right; color:#FFF; background-color:#333; padding: 14px 16px;">(user) Hi!</li>

 </ul>

 </div>

 </div>






     <div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo"><br/> </h1>
		</div>
		<div class="ticket-box animated fadeInUp">
			<div class="box-header">
				<h2>New Expense Entry </h2>
			<form action="GetTicketInfo.php" method="post">
			</div>
			<label for="TruckID">Truck ID:</label>
			<br/>
			<select name='taskOption' id='taskOption'>
			<?php
				require('./GetTruckID.php');
			?>
			</select>
			<br/>

			<label for="Broker">Expense Type:</label>
			<br/>

			<label for="Hauler">Driver:</label>
			<br/>
			<select name='hauler' id='hauler'>
			<?php
				require('./GetHaulers.php');
			?>
			</select>
			<br/>
			<label for="Broker">Vendor:</label>
			<br/>

			<select name='broker' id='broker'>
			<?php
				require('./GetBrokers.php');
			?>
			</select>
			<br/>
			<label for="time">Date:</label>
			<br/>
			<input type="date" name="date" id="date">
			<br/>
			<label for="description">Description</label>
			<br/>
			<input type="text" name="description" id="description">
			<br/>
			<label for="amount">Amount:</label>
			<br/>
			<input type="float" name="amount" id="amount">
			<br/>
			<button type="submit">Submit</button>
			<br/>
			</form>
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
