<?php
	$hostname	=	"localhost";
	$username	=	"root";
	$password	=	"fairytail90";
	$dbname     =   "POKEDEX";
	$check = 0;
//	Create	connec1on	
	$conn	=	mysqli_connect($hostname,	$username,	$password, $dbname);		
//	Check	connec1on	
	if	(!$conn) {
		die("Connection	failed:	"	.	mysqli_connect_error());
	}	
	echo	"Connected	successfully<br>";

	mysqli_query($conn,"start transaction;");	

	$sql = "CREATE Table Types(
		name VARCHAR(15), 
		strength VARCHAR(15), 
		weakness VARCHAR(15),
		PRIMARY KEY (name)
		) ENGINE = INNODB;";

	if (mysqli_query($conn, $sql)) {

	  echo "Created table successfully<br>";

	} else {

	  echo "Error: " . "<br>" . mysqli_error($conn) . "<br>";
	  mysqli_query($conn,"rollback;");
	  $check = $check + 1;
	}

	$sql = "CREATE Table Name(
		num int AUTO_INCREMENT, 
		name VARCHAR(15) NOT NULL UNIQUE, 
		type1 VARCHAR(15), 
		type2 VARCHAR(15),
		PRIMARY KEY (num), 
		FOREIGN KEY (type1)
			REFERENCES Types(name) 
			ON DELETE CASCADE,
		FOREIGN KEY (type2)
			REFERENCES Types(name) 
			ON DELETE CASCADE
			) ENGINE = INNODB;";

	if (mysqli_query($conn, $sql)) {

	  echo "Created table successfully <br>";

	} else {

	  echo "Error: " . "<br>" . mysqli_error($conn). "<br>";
	  mysqli_query($conn,"rollback;");
	  $check = $check + 1;
	}
	if($check < 1)
	{
		mysqli_query($conn,"commit;");
	}
	$result = mysqli_query($conn, "Show Tables;");
	while($row = mysqli_fetch_row($result)) {
		 echo "<br>" . $row[0];
	}
	echo "<br>".$check."<br>";
	mysqli_close($conn);
?>	