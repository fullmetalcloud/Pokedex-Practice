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
<title>AddTypes</title>
</head>
<body style='background-color:lightsteelblue'>
<form action='Check_Add_Type.php' method='POST'>
<header><h3>Add To Type DB<h3></header>
<br>
Type Name: 
<input type="text" size=15 name="insertType" />
<br>
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
?>
<br>
<input type=submit name='submitType' value='submit' />
</form>
<hr>
</body>
</html>
<?php
	mysqli_close($conn);
?>	