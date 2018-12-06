<?php
$choice=$_POST["choice"];
$i=0;

$form="<form action=\"";
if(strcmp($choice,"Insert")==0)
	{$form .="insert";$i=1;}
if(strcmp($choice,"Delete")==0)
	{$form .="delete";$i=2;}
if(strcmp($choice,"Update")==0)
	{$form .="update";$i=3;}
if(strcmp($choice,"Bill")==0)
	{$form .="bill";$i=4;}
if(strcmp($choice,"List")==0)
	{$form .="list";$i=5;}

$form .=".php\" method=\"post\">";

$form .="Surgery:  <input type=\"text\"  name=\"surgery\"><br><br>";


if($i==2){
	$form .="Enter the patient id:  <input type=\"text\" name=\"id\">";
}


if($i==1||$i==3) {
$form .="Enter the patient id:  <input type=\"text\" name=\"id\" >";
$form .="First Name:  <input type=\"text\"  name=\"Fname\" ><br><br>";
$form .="Last Name:  <input type=\"text\"  name=\"Lname\" ><br><br>";
$form .="Age:  <input type=\"text\"  name=\"Age1\" ><br><br>";
$form .="Gender:  <input type=\"text\"  name=\"Gender\" ><br><br>";
$form .="Current City:  <input type=\"text\"  name=\"City\" ><br><br>";
$form .="Date Of Birth:  <input type=\"date\"  name=\"Bday\" >&nbsp;&nbsp;";
$form .="Nationality:  <input type=\"text\"  name=\"Nation\" ><br><br>";
$form .="Doctor Name:  <input type=\"text\"  name=\"Docname\" ><br><br>";
}


$form .="<br><br><input type=\"submit\" value=\"";
if($i==1)
	$form .="Insert";
else if($i==2)
	$form .="Delete";
else if($i==3)
	$form .="Update";
else if($i==4)
	$form .="Bill";
else if($i==5)
	$form .="List";
$form .="\">";

echo $form;
?>
