<!DOCTYPE HTML>
<html>
<head>
	<title>Quiz</title>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href='style.css' rel='stylesheet' type='text/css'>
</head>
<?php
	session_start();
	echo "<center>";
	echo "<h1>Congratulations Quiz has Ended.</h1>";
	echo '<h1>Final Score:'.$_SESSION['score'].'</h1>';
	if($_SESSION['score']<=2)
	{
		echo "<h1>Practice makes a man perfect.Keep trying.</h1>";
	}
	else if($_SESSION['score']<=4)
	{
		echo "<h1>Well done.You can do Better.</h1>";
	}
	else
	{
		echo "<h1>You are great.</h1>";
	}
	echo "</center>";
	
?>
	<center>
	<form action="index.php">
			<button type="submit">Try Again</button>
	</form>
	</center>
</html>