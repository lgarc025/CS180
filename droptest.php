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

.dropbtn {
		background-color:#333;
		color: white;
		padding: 16px;
		font-size: 16px;
		border: none;
		cursor: pointer;
}

.dropdown{
		position: relative;
		display: inline-block;
}

.dropdown-content{
		display: none;
		position:relative;
		background-color: #888;
		min-width: 160px;
<!--		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);-->
}

.dropdown-content a{
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
}

.dropdown-content a:hover{
		background-color: #888;
}

.dropdown:hover .dropdown-content{
		display: block;
}

.dropdown:hover .dropbtn{
		background-color:#888;
}

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
		background-color: #333;
}

.active {
		background-color: #333;
}

</style>
</head>
<body>
<ul>
    <li><a href="#home">Home</a></li>
    <li class="dropdown">
		<button class="dropbtn" href="#hlr">Haulers</a>
		<div class="dropdown-content">
			<a href="#hlr">First Hauler</a>
			<a href="#hlr">Second Hauler</a>
			<a href="#hlr">Third Driver</a>
		</div>
	</li>
    <li class="dropdown">
		<button class="dropbtn" href="#drvr">Brokers</a>
		<div class="dropdown-content">
			<a href="#drvr">First Driver</a>
			<a href="#drvr">Second Driver</a>
			<a href="#drvr">Third Driver</a>
		</div>
	</li>
    <li class="dropdown">
		<button class="dropbtn" href="#drvr">Driver</a>
		<div class="dropdown-content">
			<a href="#drvr">First Driver</a>
			<a href="#drvr">Second Driver</a>
			<a href="#drvr">Third Driver</a>
		</div>
	</li>
    <li class="dropdown">
		<button class="dropbtn" href="#trk">Trucks</a>
		<div class="dropdown-content">
			<a href="#trk">First Truck</a>
			<a href="#trk">Second Truck</a>
			<a href="#trk">Third Truck</a>
		</div>
	</li>
    <li class="dropdown">
		<button class="dropbtn" href="#ex">Expenses</a>
		<div class="dropdown-content">
			<a href="#ex">First Expense</a>
			<a href="#ex">Second Expense</a>
			<a href="#ex">Third Expense</a>
		</div>
	</li>
	<li><a href="luistrucking.html">Logout</a></li>
</ul>


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
