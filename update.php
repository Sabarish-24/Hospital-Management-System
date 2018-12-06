<?php
$s="localhost";
$u="root";
$p="";
$db="project";

$surgery=$_POST["surgery"];
if(strcmp("heart2",$surgery)==0)
	$t="heart2";
else  if(strcmp("eye1",$surgery)==0)
	$t="eye1";
else if(strcmp("kidney1",$surgery)==0)
	$t="kidney1";

$surgery=$_POST["surgery"];
$id=$_POST["id"];
$fname=$_POST["Fname"];
$lname=$_POST["Lname"];
$age=$_POST["Age1"];
$gender=$_POST["Gender"];
$city=$_POST["City"];
$bday=$_POST["Bday"];
$nation=$_POST["Nation"];
$docname=$_POST["Docname"];

$conn=mysqli_connect($s,$u,$p,$db);
if($conn->connect_error) {
	die("Connection failed:".$conn->connect_error);
}

$sql="update $t set fname=\"$fname\", lname=\"$lname\", Age1=$age,gender=\"$gender\",city=\"$city\",$bday=$bday,nation=\"$nation\",docname=\"$docname\" where id=\"$id\"";
echo $sql;

if($conn->query($sql)==TRUE)
		echo "A record is successfully updated in the table $t";
	else
		echo "Error in updation in table $t: ".$conn->error;

$conn->close();
?>
<br><br>
<button><a href="patientss.html" style="text-decoration:underline;color:black;">Home</a></button>