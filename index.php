<!DOCTYPE HTML>
<html>
<head>
	<title>Quiz</title>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href='style.css' rel='stylesheet' type='text/css'>
</head>
<?php
	session_start();
	if( isset($_SESSION['score']))
	{
		session_destroy();
	}
?>
<body>
	<center>
		<h1>Welcome to a Demo on Quiz using Adaptive Learning</h1>
		<img src="adapt.jpg"/>
		<form action="fetch.php">
			<button type="submit">Start Quiz</button>
		</form>
	</center>
</body>
</html>