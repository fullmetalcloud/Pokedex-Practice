<?php
	$hostname	=	"localhost";
	$username	=	"root";
	$password	=	"fairytail90";
	$dbname     =   "POKEDEX";
//	Create	connection	
	$conn	=	mysqli_connect($hostname,	$username,	$password, $dbname);		
//	Check	connection	
	if	(!$conn) {
		die("Connection	failed:	"	.	mysqli_connect_error());
	}	
	echo	"Connected	successfully";	

	$sql ="INSERT INTO Types (name, strength, weakness) VALUES ('".$_POST[insertType]."',NULL,NULL);";

	if(mysqli_query($conn, $sql))
	{
		echo "Type Inserts Success";
	}
	else 
	{
		echo "Type Insert Fail" . mysqli_error($conn);
	}
?>

<html>
<head>
<title>CheckName</title>
</head>
<body style='background-color:lightsteelblue'>
<form action='Add_to_Type.php' method='POST'>
	<input type=submit name='submit' value='return' />
</form>
<hr>
</body>
</html>
<?php
	mysqli_close($conn);
?>	