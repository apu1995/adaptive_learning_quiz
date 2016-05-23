<?php
	$host="localhost";
	$user='root';
	$pass='';
	$db='learn';
	$con=new mysqli($host,$user,$pass,$db) or die("Unable to Connect.".mysql_error());

	$srno = $_POST['srno'];
	$level = $_POST['level'];
	$ques = $_POST['ques'];
	$op1 = $_POST['op1'];
	$op2 = $_POST['op2'];
	$op3 = $_POST['op3'];
	$op4 = $_POST['op4'];
	$correct = $_POST['correct'];
	$sql="INSERT INTO quiz VALUES(".$srno.",'".$level."','".$ques."','".$op1."','".$op2."','".$op3."','".$op4."',".$correct.",0)";
	$res=$con->query($sql);
?>