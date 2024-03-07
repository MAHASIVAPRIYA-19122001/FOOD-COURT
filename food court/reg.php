<?php
	
	$conn = new mysqli("localhost:3306","root","","Food");
	if(!$conn){
		die("Failed : " . $Conn->connect_error);
	}
	
	//Create Account :

	$forename=$_POST['forename'];
	$surname=$_POST['surname'];
	$username=$_POST['username'];
	$pwd=$_POST['pwd'];
	
	//echo $forename." ".$surname." ".$username." ".$pwd;
	
	$query="insert into User values('".$forename."','".$surname."','".$username."','".$pwd."');";
	$result=$conn->query($query);
	
	header("location: index.html");
	$conn->close();
?>