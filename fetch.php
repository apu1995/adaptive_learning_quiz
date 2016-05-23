<!DOCTYPE HTML>
<html>
<head>
	<title>Quiz</title>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href='style.css' rel='stylesheet' type='text/css'>
</head>
<?php
	require_once("connect_db.php");
	require_once("session.php");
	$sql="SELECT * FROM quiz where srno=".$_SESSION['next'];
	$res=$con->query($sql);
	echo "<center>";
	$row = $res->fetch_assoc();
	$_SESSION['correct']=$row["correct_op"];
	$_SESSION['type']=$row["level"];
	echo '<form action="fetch1.php" method="post">';
	$_SESSION['count']++;
	echo '<h1>Question Level:'.$row["level"].'</h1>';
	echo '<h1>Current Score:'.$_SESSION['score'].'</h1>';
	echo '<h1>'.$row["question"]."</h1><br/>";
	echo '<select name="ans">';
	echo "<option value='1'>".$row["op1"]."</option><br/>";
	echo "<option value='2'>".$row["op2"]."</option><br/>";
	echo "<option value='3'>".$row["op3"]."</option><br/>";
	echo "<option value='4'>".$row["op4"]."</option><br/>";
	echo "</select><br/>";
	echo '<button type="submit" onclick="next()">Submit</button></br>';
	echo "</form>";
	echo "</center>";
?>
</html>