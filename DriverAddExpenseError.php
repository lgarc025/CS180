<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Luis Trucking - Sign In </title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/dropStyle.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<style>

body {margin:0;}
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
	<li><a href="home.php">Home</a></li><li>
		<li><a href="#tic">Tickets</a>
			<ul>
			<li><a href="/DriverAddTicket.php">Add Tickets</a></li>
				<li><a href="/DriverRemoveTicket.php">Remove Tickets</a></li>
			</ul></li><li>
		<a class="active" href="#exp">Expenses</a>
			<ul>
				<li><a href="/DriverAddExpense.php">Add Expense</a></li>
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
				<h2>New Expense Entry </h2>
			<form action="UploadExpense.php" method="post">
			</div>
			Error Entering Expense, Try Again!
			<br/>
			<label for="TruckID">Truck ID:</label>
			<br/>
			<select name='taskOption' id='taskOption'>
			<?php
				require('./GetTruckID.php');
			?>
			</select>
			<br/>

			<label for="expensetype">Expense Type:</label>
			<br/>

			<select name='expensetype' id='expensetype'>
			<?php
				require('./GetExpenseType.php');
			?>
			</select>
			</br>

			
		<!--	<label for="driver">Driver:</label>
			<br/>
			<select name='driver' id='driver'>
			<?php
				//require('./GetDriver.php');
			?>
			</select>
			<br/>
		-->	
			<label for="vendor">Vendor:</label>
			<br/>

			<select name='vendor' id='vendor'>
			<?php
				require('./GetVendor.php');
			?>
			</select>
			<br/>
			<label for="time">Date:</label>
			<br/>
			<input type="date" name="date" id="date">
			<br/>
			<label for="description">Description:</label>
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
