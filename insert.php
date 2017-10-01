<?php

	$con =mysqli_connect('127.0.0.1','root','');
	
	if (!$con)
	{
		echo 'Not Connected To Server';
	}
	
	if (!mysqli_select_db($con,'tutorial'))
	{
		echo 'Database Not Selected';
	}
	
	$Name = $_POST['username'];
	$Email = $_POST['email'];
	
	$sql ="Insert into person (Name,Email) VALUES ('$Name','$Email')";
	
	if (!mysqli_query($con,$sql))
	{
		echo 'Not Inserted';
	}
	else
	{
		echo 'Inserted';
	}
	
	header("refresh:2; url=http://localhost/scripts/form.html");
?>