<!Doctype html>
<html>
<link rel="stylesheet" type="text/css" href="style.css"/>
<body>
<?php
include "connection.php";

if($_SERVER['REQUEST_METHOD']=='POST')
{
 $inEmail=$_POST["t1"];
 $inName=$_POST["t2"];
 $inMob=$_POST["t3"];
 $inCity=$_POST["t4"];
 $inBg=$_POST["t5"];
 $sql="insert into register values('".$inEmail."','".$inName."','".$inMob."','".$inCity."','".$inBg."')";
if(mysqli_query($conn,$sql))
{
	echo"Record saved";
}
else
{
	echo"Error in inserting data: ".mysqli_error($conn);
}
mysqli_close($conn);
}
?>