<!DOCTYPE HTML>
<html>
<head>
	<title>Quiz</title>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href='style.css' rel='stylesheet' type='text/css'>
</head>
<?php
	require_once("connect_db.php");
	$_SESSION['count']++;
	if($_SESSION['count']>6)
	{
		header('Location:end.php');
	}
	$answered=$_POST['ans'];
	if($answered==$_SESSION['correct'])
	{
		$_SESSION['score']++;
		if($_SESSION['type']=="l")
		{
			$_SESSION['clq_count']++;
		}
		else if($_SESSION['type']=="m")
		{
			$_SESSION['cmq_count']++;
		}
		else
		{
			$_SESSION['chq_count']++;
		}
	}
	if($_SESSION['clq_count']==$_SESSION['mlq_count'])
	{
		$_SESSION['clq_count']=0;
		$_SESSION['next']=6;	
	}
	else if($_SESSION['cmq_count']==$_SESSION['mmq_count'])
	{
		$_SESSION['cmq_count']=0;
		$_SESSION['next']=11;
	}
	else
	{
		$_SESSION['next']++;	
	}
	$sql="SELECT * FROM quiz where srno=".$_SESSION['next'];
	$res=$con->query($sql);
	$row = $res->fetch_assoc();
	$_SESSION['correct']=$row["correct_op"];
	$_SESSION['type']=$row["level"];
	echo "<center>";
	echo '<form action="fetch2.php" method="post">';
	echo '<h1>Question Level:'.$row["level"].'</h1>';
	echo '<h1>Current Score:'.$_SESSION['score'].'</h1>';
	echo '<h1>'.$row["question"]."</h1><br/>";
	echo '<select name="ans">';
	echo "<option value='1'>".$row["op1"]."</option><br/>";
	echo "<option value='2'>".$row["op2"]."</option><br/>";
	echo "<option value='3'>".$row["op3"]."</option><br/>";
	echo "<option value='4'>".$row["op4"]."</option><br/>";
	echo "</select><br/>";
	echo '<button type="submit">Submit</button></br>';
	echo "</form>";
	echo "</center>";
?>
</html>