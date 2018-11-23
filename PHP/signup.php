<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>
<body>
	<form>
		<h1>Sign up for Our Website</h1>
		Username
		<input type="text" name="user" placeholder="Enter Username" required>
		<br><br>
		Email
		<input type="text" name="email" placeholder="Enter Email" required>
		<br><br>
		Password
		<input type="password" name="pass" placeholder="Enter Password" required>
		<br><br>
		<button type="submit" name="signup" value="submit">Sign Up</button>
	</form>

<?php

if (isset($_GET['signup'])) {
	$user = $_GET['user'];
	$pass = $_GET['email'];
	$email = $_GET['pass'];
}

?>

</body>
</html>
