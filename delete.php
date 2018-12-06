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

$surgery=$_POST["surgery"];
$id=$_POST["id"];

$conn=mysqli_connect($s,$u,$p,$db);
if($conn->connect_error) {
	die("Connection failed:".$conn->connect_error);
}

$sql="delete from $t where id=\"$id\"";

if($conn->query($sql)==TRUE)
		echo "A record is successfully deleted from the table $t";
	else
		echo "Error in deletion from table $t: ".$conn->error;

$conn->close();
?>
<br><br>
<button><a href="patientss.html" style="text-decoration:underline;color:black;">Home</a></button>