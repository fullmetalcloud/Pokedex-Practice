<!DOCTYPE HTML>
<?php
	$hostname	=	"localhost";
	$username	=	"root";
	$password	=	"fairytail90";
	$dbname     =   "POKEDEX";
//	Create	connection	
	$conn	=	mysqli_connect($hostname,	$username,	$password, $dbname);		
	$type2Array = array();
	$var = $_GET['q'];
	$table = $_GET['t'];
	$col = $_GET['c'];
	$check = 1;
	$sql = "SELECT ".$col." FROM ".$table.";";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_row($result)) {
			if($row[0] == $var)
				$check = 0;
		}
	} 
	else {
		$check = 0;
	}
	if($check == 0)
	{
		print "Name is Taken!";
	}
	else
	{
		print "Name is Good!";
	}

?>