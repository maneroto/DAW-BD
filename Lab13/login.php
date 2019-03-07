<!DOCTYPE html>
<?php
session_start();
if(isset($_POST['username'])){
  $_SESSION['name']=$_POST['username'];
  header("location: https://daw-bd-maneroto.c9users.io/Lab13/src/form.php");
}
?>
<html lang="es-mx">
<head>
	<title>Laboratorio 13 DAW-BD</title>
	<link rel="stylesheet" type="text/css" href="style/login.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>
	<div id = "loginSquare">
		<h1>LogIn</h1>
		<form method = "post">
			<div class="formGroup">
				<label for="username"><i class="fas fa-user"></i> <span>Username</span></label>
				<input type="name" name="username">
			</div>
			<div class="formGroup">
				<label for="password"><i class="fas fa-key"></i> <span>Password</span></label>
				<input type="password" name="password">
			</div>
			<button type = "submit">Submit</button>
			<span class = "errorMessage"></span>
		</form>
	</div>
	<script type="text/javascript" src="src/login.js"></script>
</body>
</html>