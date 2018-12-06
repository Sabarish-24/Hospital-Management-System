
<?php
$sname="localhost";
$usr = "root";
$pass = "";
$conn =mysqli_connect($sname , $usr , $pass);

if($conn->connect_error)
	die("Connection Failure");
else
echo "Success <br >";


$sql = "create database $test";

if($conn->query($sql))
{	echo "Database Created<br>";
	mysqli_close($conn);
}

?>