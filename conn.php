<?php

	//echo 'Connection to DB---------------------------';

	$server="localhost";
	$user="kanvim3a_admin";
	$pass="admin1234";
	$db="kanvim3a_torq";
	
	$connection=new mysqli($server,$user,$pass,$db);
	if ($connection->connect_error)
	{
		die("Error:".$connection->connect_error);
	}
	//echo "Connected successfully---------------------";
	
?>