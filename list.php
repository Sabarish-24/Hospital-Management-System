<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
table {
	border-collapse:collapse;
}
</style>
</head>

<body>
<?php
$s="localhost";
$u="root";
$p="";
$db="project";

$sub=$_POST["surgery"];
if(strcmp("heart2",$sub)==0)
	$t="heart2";
else  if(strcmp("eye1",$sub)==0)
	$t="eye1";
else if(strcmp("kidney1",$sub)==0)
	$t="kidney1";

$conn=mysqli_connect($s,$u,$p,$db);
if($conn->connect_error) {
	die("Connection failed:".$conn->connect_error);
}

$sql="show columns from $t";
$r=$conn->query($sql);

$i=0;
while($row=$r->fetch_assoc()) {
	$a[$i]=$row['Field'];
	$i++;
}

	$sql="select * from $t";
	$r=$conn->query($sql);
	
	if($r->num_rows>0) {
		echo "<table><tr>";
		for($j=0;$j<$i;$j++)
			echo "<th>".$a[$j]."</th>";
		echo "</tr>";
		
		while($row=$r->fetch_assoc()) {
			echo "<tr>";
			for($j=0;$j<$i;$j++)
				echo "<td>".$row[$a[$j]]."</td>";
			echo "</tr>";	
		}
		echo "</table>";
	}	
	else {
		echo "0 results";
	}

$conn->close();
?>
<br><br>
<button><a href="patientss.html" style="text-decoration:underline;color:black;">Home</a></button>
</body>
</html>