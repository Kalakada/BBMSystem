<!Doctype html>
<html>
<body bgcolor="white">
<title>Blood Bank System</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<div class="topnav">
 
 <a class="active " href="Home.php">Home</a>
 <a class="active " href="reg.php">Register</a>
 <a class="active " href="search1.php">Search</a>
 <a class="active " href="logout.php">Log Out</a>
</div>
<center>
<form name="Search" method="post" action="">
<table>



 <tr>
                    <td><font size="6">City:</font></td>
                    <td><select name="city">
                                <option>Jabalpur</option>
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
                    <td><input type="submit" value="Search" name="b2"/></td>
                </tr>

</table>
</form>
</center>
</body>
</html>
<?php
include "connection.php";
$inCity=$_POST["city"];
$inBloodgroup=$_POST["bgroup"];
$sql="select * from register where (city='".$inCity."' && bgroup='".$inBloodgroup."')";
echo " <center><table border='1px'><tr><th>Email </th>";
echo " <th>Name </th>";
echo " <th>Mobile </th>";
echo " <th>City </th>";
echo " <th>Blood Group </th>";

$result=$conn->query($sql);
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
echo " <tr><td>".$row["email"]."</td><td>".$row["name"]."</td><td>".$row["phn"]."</td><td>".$row["city"]."</td><td>".$row["bgroup"]."</td></tr>";
}
echo "</table></center>";
}
else
{
?>
	<script type="text/javascript">alert('No data found !!!');</script>
<?php	
	echo" NO RESULTS! ";
}
mysqli_close($conn);
?>
