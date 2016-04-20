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

	$sql ="INSERT INTO Name (name, type1, type2) VALUES ('".$_POST[insertName]."','".$_POST[type1]."','".$_POST[type2]."');";

	if(mysqli_query($conn, $sql))
	{
		echo "Test Inserts Success";
	}
	else 
	{
		echo "Insert Fail" . mysqli_error($conn);
	}
?>

<html>
<head>
<title>CheckName</title>
</head>
<body style='background-color:lightsteelblue'>
<form action='Add_to_Name.php' method='POST'>
</form>
<hr>
</body>
</html>
<?php
	mysqli_close($conn);
?>	