<?php
	
	$conn = new mysqli("localhost:3306","root","","Food");
	if(!$conn){
		die("Failed : " . $Conn->connect_error);
	}
	

	//Check login :

	$username=$_POST['username'];
	$pwd=$_POST['pwd'];
     
	$query="select * from user where username='".$username."' and password='".$pwd."';";
	$result = $conn->query($query);
	
	if($result->num_rows>0){
		header("location: main.html");
	}
	else{
	echo"alert('Invalid mail and password')";
		header("location: index.html");
	}
	$conn->close();
?>