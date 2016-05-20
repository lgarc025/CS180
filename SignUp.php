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
</head>

<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">Create New Account <br/> </span></span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Sign Up</h2>
			<form action="CreateNewCompany.php" method="post">
			</div>
			Enter The Following Information:
			<br/>
			<label for="username">Name</label>
			<br/>
			<input type="text" name="name" id="name">
			<br/>
			<label for="username">username</label>
			<br/>
			<input type="text" name="username" id="username">
			<br/>
			<label for="username">Pay Rate</label>
			<br/>
			<input type="number" name="rate" id="rate">
			<br/>
			<label for="password">password</label>
			<br/>
			<input type="password" name="password" id="password">
			<br/>
			<label for="password">Reenter Password</label>
			<br/>
			<input type="password" name="password1" id="password1">
			<br/>
			<label for="company">Company</label>
			<br/>
			<input type="text" name="company" id="company">
			<br/>
			<button type="submit">Create Account</button>
			</form>
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
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	var uname = document.getElementById("username").value;
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

