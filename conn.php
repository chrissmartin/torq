<?php

	//echo 'Connection to DB---------------------------';

	$server="127.0.0.1";
	$user="root";
	$pass="";
	$db="torq";
	
	$connection=new mysqli($server,$user,$pass,$db);
	if ($connection->connect_error)
	{
		die("Error:".$connection->connect_error);
	}
	//echo "Connected successfully---------------------";
	
?>