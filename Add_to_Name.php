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
	$type1Array = array();	
	$sql = "SELECT name FROM Types";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_row($result)) {
			$type1Array[] = $row[0];
		}
	} 
	else {
		echo "0 results for Types";
	}
	echo "</select>";
?>
<html>
<head>
<title>AddName</title>
<script>
function updateTypeDropdown(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","changeDropdownType.php?q="+str,true);
        xmlhttp.send();
    }
}

function checkName(str)
{
	 if (str == "") {
        document.getElementById("checkName").innerHTML = "";
        return;
    } else { 
    	var table = "Name";
    	var col = "name";
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("checkName").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","checkdatabase.php?q="+str+"&c="+col+" &t="+table,true);
        xmlhttp.send();
    }
}

</script>
</head>
<body style='background-color:lightsteelblue'>
<form action='Check_Add_Name.php' method='POST'>
<header><h3>Add To Name DB<h3></header>
<br>

Pokemon Name: 
<input type="text" size=15 name="insertName" onchange="checkName(this.value)"/>
<div id="checkName"><b>Something should change here...</b></div>
<br><br>

Type 1:
<br>
<?php
	if (count($type1Array) > 0) {
			echo "<select name='type1' onchange='updateTypeDropdown(this.value)'>";
			for ($x = 0; $x < count($type1Array); $x++) {
			    echo "<option value ='" . $type1Array[$x] . "'>" . $type1Array[$x] . "</option>";
			}
	}
	else {
		echo "0 results";
	}
	echo "</select>";
?>
<br><br>
Type 2:
<div id="txtHint"><b>Something should change here...</b></div>
<input type=submit name='submitName' value='submit' />
</form>
<hr>
</body>
</html>