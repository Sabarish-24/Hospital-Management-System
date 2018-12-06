
<?php
$sname="localhost";
$usr = "root";
$pass = "";
$conn = mysqli_connect($sname , $usr , $pass);

if($conn->connect_error)
	die("Connection Failure");
else
echo "Success <br / >";

$sql = "use test";

if($conn->query($sql))
{
	echo "Database Selected";
	$sql1 = "create table pati (fname varchar(20),lname varchar(20),gender varchar(10),city varchar(20),year integer,month varchar(10),date integer)";
	if($conn->query($sql1))
	{
	echo "Table pati created<br >";
	}
}
else
   die("Unable to create database or database already exists");

?>