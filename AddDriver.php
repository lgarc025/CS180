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
    <li><a href="#home">Home</a></li>
    <li><a href="#news">Haulers</a></li>
	<li><a href="#contact1">Brokers</a></li>
	<li><a class="active" href="#about3">Drivers</a></li>
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
				<h2>Add New Driver </h2>
			<form action="AddDriverInfo.php" method="post">
			</div>
			<br/>
			<label for="name">Name:</label>
			<br/>
			<input type="text" name="name" id="name">
			<br/>
			<label for="login">Login:</label>
			<br/>
			<input type="text" name="login" id="login">
			<br/>
			<label for="password">Password:</label>
			<br/>
			<input type="text" name="password" id="password">
			<br/>
			<label for="payrate">Pay Rate:</label>
			<br/>
			<input type="float" name="payrate" id="payrate">
			<br/>
			<button type="submit">Add Driver</button>
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
