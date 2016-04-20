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
<header><h3>Add To Name DB<h3></header>
<br>

Pokemon Name: 
<input type="text" size=15 name="insertName" />
<br><br>

Type 1:
<br>
<?php
$sql = "SELECT name FROM Types";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	echo "<select name = 'type1'>";
	while($row = mysqli_fetch_row($result)) {
	    echo "<option value ='" . $row[0] . "'>" . $row[0] . "</option>";
	}
} 
else {
	echo "0 results";
}
echo "</select>";

?>
<br><br>
Type 2:
<br>
<?php
$sql = "SELECT name FROM Types";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	echo "<select name = 'type2'>";
	while($row = mysqli_fetch_row($result)) {

	    echo "<option value ='" . $row[0] . "'>" . $row[0] . "</option>";
	}
} 
else {
	echo "0 results";
}
echo "</select>";
?>
<br><br>
<input type=submit name='submitName' value='submit' />
</form>
<hr>
</body>
</html>
<?php
	mysqli_close($conn);
?>	
