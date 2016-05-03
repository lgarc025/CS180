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

body {margin:0;}

ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: #333;
		position: fixed;
		top: 0;
		width: 100%;
}

li {
		float: left;
}

li a {
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
}

li a:hover:not(.active) {
		background-color: #88;
}

.active {
		background-color: #888;
}

</style>
</head>
<body>
<ul>
    <li><a class="active" href="#home">Home</a></li>
    <li><a href="#news">Haulers</a></li>
	<li><a href="#contact1">Brokers</a></li>
	<li><a href="#about3">Drivers</a></li>
    <li><a href="#home4">Trucks</a></li>
    <li><a href="#news3">Expenses</a></li>
	<li><a href="luistrucking.html">Logout</a></li>
</ul>


     <div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo"><br/> </h1>
		</div>
		<div class="ticket-box animated fadeInUp">
			<div class="box-header">
				<h2>New Ticket Entry </h2>
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
			<label for="Hauler">Hauler:</label>
			<br/>
			<select name='hauler' id='hauler'>
			<?php
				require('./GetHaulers.php');
			?>
			</select>
			<br/>
			<label for="Broker">Broker:</label>
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
			<label for="user">Ticket ID:</label>
			<br/>
			<input type="text" name="user" id="user">
			<br/>
			<label for="payrate">Pay Rate:</label>
			<br/>
			<input type="float" name="payrate" id="payrate">
			<br/>
			<label for="tons">Tons/Hours:</label>
			<br/>
			<input type="float" name="tons" id="tons">
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
