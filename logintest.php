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

	//$sql = "";
	//mysqli_query($conn,$sql);
	//$result = mysqli_query($conn, "Show databases;");
	//while($row = mysqli_fetch_row($result)) {
	//	 echo "<br>" . $row[0];
	//}

	mysqli_close($conn);
?>		
