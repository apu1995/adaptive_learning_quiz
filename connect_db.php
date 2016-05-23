<?php
	$user='root';
	$pass='';
	$db='learn';
	$con=new mysqli('localhost',$user,$pass,$db) or die("Unable to Connect.".mysql_error()); 
	session_start();
?>