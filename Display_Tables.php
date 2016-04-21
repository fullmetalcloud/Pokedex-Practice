<!DOCTYPE HTML>
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
?>
<html>
<head>
<title>AddName</title>
</head>
<body style='background-color:lightsteelblue'>
<form action='Check_Add_Name.php' method='POST'>
<header><h3>Types DB<h3></header>
<?php
	$sql = "SELECT * FROM Types";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_row($result)) {
		    echo $row[0]. " ". $row[1]." ". $row[2]."<br>";
		}
	} 
	else {
		echo "0 results";
	}
	echo "<br>";
?>
<header><h3>Name DB<h3></header>
<?php
	$sql = "SELECT * FROM Name";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_row($result)) {
		    echo $row[0]. " ". $row[1]." ". $row[2]."<br>";
		}
	} 
	else {
		echo "0 results";
	}
	echo "<br>";
?>
<br>
</form>
<hr>
</body>
</html>	
