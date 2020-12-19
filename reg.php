<!DOCTYPE html>
<html>
<body bgcolor="white">
<link rel="stylesheet" type="text/css" href="style.css"/>
<div class="topnav">
 <a class="active " href="Home.php">Home</a>
 <a class="active " href="reg.php">Register</a>
 <a class="active " href="search1.php">Search</a>
 <a class="active " href="logout.php">Log Out</a>
</div>
<tr>
<td><br></td>
</tr><tr>
<td><br></td>
</tr>
<tr>
<td><br></td>
</tr>
<form action="" method="post" name="register">
<center>
<table>
<tr>
<td><br></td>
</tr>


<tr>
                    <td><font size="6" >Email:</font></td>
                    <td><input type="email" name="email" required></input></td>
                </tr>
                <tr>
                    <td><font size="6">Name:</font></td>
                    <td><input type="text" name="name" required></input></td>
                </tr>
                <tr>
                    <td><font size="6">Mobile:</font></td>
                    <td><input type="text" name="phn" required pattern="[0-9]{10}"/></td>
                </tr>
                <tr>
                    <td><font size="6">City:</font></td>
                    <td><select name="city">
                                <option value="Jabalpur">Jabalpur</option>
                        </select></td>
                </tr>
                <tr>
                    <td><font size="6">Blood Group:</font></td>
                    <td><select name="bgroup">
                                <option>O+</option>
                                <option>A+</option>
                                <option>B+</option>
                                <option>AB+</option>
                                <option>O-</option>
                                <option>A-</option>
                                <option>B-</option>
                                <option>AB-</option>
                        </select></td>
                </tr>
               <tr>
                    <td></td>
                    <td><input type="submit" value="Submit" name="b1"/>
                </tr>
<tr>
<td><br></td>
</tr>
<tr>
<td><br></td>
</tr>
</table>
</center>
</form>
<?php
include "connection.php";

if($_SERVER['REQUEST_METHOD']=='POST')
{
 $inEmail=$_POST["email"];
 $inName=$_POST["name"];
 $inMob=$_POST["phn"];
 $inCity=$_POST["city"];
 $inBg=$_POST["bgroup"];
 $sql="insert into register values('".$inEmail."','".$inName."','".$inMob."','".$inCity."','".$inBg."')";
if(mysqli_query($conn,$sql))
{
?>
	<script type="text/javascript">alert('Records saved');</script>
<?php
	echo "Record saved";
}
else
{
?>
	<script type="text/javascript">alert('Some error occured in saving records');</script>
<?php	
	echo"Error in inserting data: ".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
</body>
</html>
