<!DOCTYPE HTML>
<?php
	$hostname	=	"localhost";
	$username	=	"root";
	$password	=	"fairytail90";
	$dbname     =   "POKEDEX";
//	Create	connection	
	$conn	=	mysqli_connect($hostname,	$username,	$password, $dbname);		
	$type2Array = array();	
	$type1 = $_GET['q'];
	$sql = "SELECT name FROM Types";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_row($result)) {
			if($row[0]!==$type1)
			{
				$type2Array[] = $row[0];
			}
		}
	} 
	else {
		echo "0 results for Types";
	}
	if (count($type2Array) > 0) {
			echo "<select name='type2'>";
			for ($x = 0; $x < count($type2Array); $x++) {
			    echo "<option value ='" . $type2Array[$x] . "'>" . $type2Array[$x] . "</option>";
			}
	}
	else {
		echo "0 results";
	}
	echo "</select>";
?>