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

	echo	"Connected	successfully <br>";	

	$result = mysqli_query($conn, "Show Tables;");
	while($row = mysqli_fetch_row($result)) {
			$sql = "DROP Table ". $row[0].";";

		if (mysqli_query($conn, $sql)) {

		echo "Deleted table ". $row[0]." successfully <br>";

		} else {

	  		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

	}

	mysqli_close($conn);
?>	