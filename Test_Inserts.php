<?php
	$hostname	=	"localhost";
	$username	=	"root";
	$password	=	"fairytail90";
	$dbname     =   "POKEDEX";

//	Create	connec1on	
	$conn	=	mysqli_connect($hostname,	$username,	$password, $dbname);		
//	Check	connec1on	
	if	(!$conn) {
		die("Connection	failed:	"	.	mysqli_connect_error());
	}	
	echo	"Connected	successfully";	
	$sql = "INSERT INTO Types (name, strength, weakness)VALUES('Rock',NULL,NULL);";
	//$sql ="INSERT INTO Types (name, strength, weakness)VALUES('Ground',NULL,NULL);";

	if(mysqli_query($conn, $sql))
	{
		echo "Test Inserts Success";
	}
	else 
	{
		echo "Insert Fail" . mysqli_error($conn);
	}
 
	mysqli_close($conn);
?>